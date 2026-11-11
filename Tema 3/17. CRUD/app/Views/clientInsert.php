<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Introducir nuevo usuario:</h1>
<form action="<?php require_once __DIR__ . '/../Views/clientInsert.php';?>" method="post">
    <label>DNI: <br><input type="text" name="dni" value="<?= $_SESSION['dni'] ?? "" ?>"></label><br>
    <label>Nombre: <br><input type="text" name="name" value="<?= $_SESSION['name'] ?? "" ?>"></label><br>
    <label>Dirección: <br><input type="text" name="address" value="<?= $_SESSION['address'] ?? "" ?>"></label><br>
    <label>Teléfono: <br><input type="text" name="phone" value="<?= $_SESSION['phone'] ?? "" ?>"></label><br>
    <label>Provincia: <br><input type="text" name="city" value="<?= $_SESSION['city'] ?? "" ?>"></label><br>
    <label>País: <br><input type="text" name="country" value="<?= $_SESSION['country'] ?? "" ?>"></label><br><br>
        <button type="submit">Enviar</button>
    <button type="reset">Borrar los datos introducidos</button>
</form>
</body>
</html>