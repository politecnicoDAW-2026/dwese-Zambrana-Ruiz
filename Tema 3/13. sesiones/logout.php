<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tu CV:</h1>
    <p>Nombre: <?= $_SESSION['name'] ?></p>
    <p>Apellidos: <?= $_SESSION['surname'] ?></p>
    <p>Contraseña: <?= $_SESSION['password'] ?></p>
    <p>DNI: <?= $_SESSION['governmentID'] ?></p>
    <p>Sexo: <?= $_SESSION['gender'] ?></p>
    <p>Quiero recibir spam: <?= isset($_SESSION['spamSubscription']) ? "Sí" : "No"; ?></p>
    <a href="./login.php">Volver</a>
</body>
</html>

<?php
//session_destroy();