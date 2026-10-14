<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

include_once 'Document.php';
include_once 'Book.php';
include_once 'Magazine.php';
include_once 'DVD.php';
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

} else {

    $mainZone = new Zona(1000,'principal');
    $sellingZone = new Zona(200,'compra-venta');
    $vipZone = new Zona(25,'vip');
}
?>
<h1>Biblioteca</h1>


<h2>Comprar entradas:</h2>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="text/plain">
    <p>Seleccione la sala en la que reservar entradas: </p>
    <label> Principal:
        <input type="radio" value="main" name="zone">
    </label>
    <label> Compra venta:
        <input type="radio" value="main" name="market">
    </label>
    <label> VIP:
        <input type="radio" value="main" name="vip">
    </label>
    <br>
    <label>Introduzca la cantidad a reservar
        <input type="text" name="amount" value="<?= $amount ?? ""; ?>">
    </label>
</form>
</body>
</html>
