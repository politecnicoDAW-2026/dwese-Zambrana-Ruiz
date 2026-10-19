<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = trim($_POST["name"]);
    $surname = trim($_POST["surname"]);
    $date = $_POST["date"];

    $date = DateTime::createFromFormat('d-m-Y', $_POST["date"]);

    if (6 == (int)$date->format('m')) {
        echo '<p>Lo siento mucho Señor/a ' . htmlspecialchars($name) . ' ' . htmlspecialchars($surname) . ' , pero en la fecha ' . date('d-m-Y', $date) . ' estamos de vacaciones, nos vemos a la vuelta, que será ya en el mes de julio.</p>';
    } else {
        echo '<p>Señor/a '.htmlspecialchars($name).' '.htmlspecialchars($surname).'. Será un placer atenderle en nuestro restaurante el '.date('d-m-Y', $date).'.</p>';
    }
} else {
?>
<h1>Reservar mesa</h1>

<h2>Comprar entradas:</h2>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
    <p>Datos personales: </p>
    <label >Nombre:
        <input type="text" required accept="text/plain" pattern="^[A-ZÁÉÍÓÚÑa-záéíóúñ]+(?: [A-ZÁÉÍÓÚÑa-záéíóúñ]+)*$" name="name" value="<?= $name ?? ""; ?>">
    </label><br>
    <label >Apellidos:
        <input type="text" required accept="text/plain" pattern="^[A-ZÁÉÍÓÚÑa-záéíóúñ]+(?: [A-ZÁÉÍÓÚÑa-záéíóúñ]+)*$" name="surname" value="<?= $surnames ?? ""; ?>">
    </label><br>
    <label >Fecha:
        <input type="datetime-local" required name="date">
    </label><br>
    <button type="submit">Enviar</button>
</form>
<?php } ?>
</body>
</html>
