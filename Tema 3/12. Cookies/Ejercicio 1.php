<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    setcookie("cookiePolicy", "1",time() + 120,"/");
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
if (!isset($_COOKIE["cookiePolicy"])) {?>

    <h1>Debe aceptar la política de cookies</h1>
    <form method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <button type="submit">Confirmar</button>
    </form>

<?php
} else {
    var_dump($_COOKIE);
}
?>

</body>
</html>
