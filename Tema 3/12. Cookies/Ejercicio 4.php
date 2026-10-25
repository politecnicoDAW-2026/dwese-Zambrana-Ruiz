<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST' && isset($_POST["gender"]) && isset($_POST["name"])) {
    if ($_COOKIE["singer"]) {
        setcookie(
            "singer",
            $_COOKIE["singer"].'<p>'.$_POST["name"].'  '.$_POST["gender"].'</p>',
            time() + 120,
            "/");
    } else {
        setcookie(
            "singer",
            '<p>'.$_POST["name"].'  '.$_POST["gender"].'</p><br>',
            time() + 120,
            "/");
    }
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
if (isset($_COOKIE["singer"])) {
    echo $_COOKIE["singer"];
}
?>
<h2>Insertar nuevo cantante: </h2>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label><input type="radio" name="gender" value="male"> Masculino</label><br>
    <label><input type="radio" name="gender" value="female"> Femenino</label><br>
    <label>Nombre: <input type="text" name="name"></label><br>
    <button type="submit">Enviar</button>
</form>
</body>
</html>