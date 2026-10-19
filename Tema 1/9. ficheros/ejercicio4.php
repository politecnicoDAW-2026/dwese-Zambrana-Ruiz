<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once __DIR__ . '/functionEscribirNumerosMod.php';
    require_once __DIR__ . '/functionLeerContenidoFichero.php';

    escribirNumerosMod(array(2,8,14),'sobreescribir');
    leerContenidoFichero(__DIR__ . '/datosEjercicio.txt');
    echo "<br>";
    escribirNumerosMod(array(33,11,16),'');
    leerContenidoFichero(__DIR__ . '/datosEjercicio.txt');
    echo "<br>";
    escribirNumerosMod(array(4,99,12),'sobreescribir');
    leerContenidoFichero(__DIR__ . '/datosEjercicio.txt');
    echo "<br>";
    echo 'Adiós';
    ?>
</body>
</html>