<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["language"])) {
    setcookie("language", $_POST["language"],time() + 120,"/");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_COOKIE["language"])) {
    switch ($_COOKIE["language"]) {
        case 'es':
            echo '<h1>Bienvenido</h1>';
            break;
        case 'fr':
            echo '<h1>Bienvenue</h1>';
            break;
        case 'it':
            echo '<h1>Benvenuto</h1>';
            break;
        default:
            echo '<h1>Welcome</h1>';
            break;
    }
} else echo '<h1>Welcome</h1>';
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label><input type="radio" name="language" value="es"> Español</label><br>
    <label><input type="radio" name="language" value="en"> English</label><br>
    <label><input type="radio" name="language" value="it"> italiano</label><br>
    <label><input type="radio" name="language" value="fr"> français</label><br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>