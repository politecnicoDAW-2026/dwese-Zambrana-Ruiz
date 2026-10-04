<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (!isset($_POST['value'])) { ?>
    <h1>Introduzca la cantidad a convertir</h1>
    <p>Convertir de: </p>
    <form action="/tema%202/formularios%201/ejercicio7.php" method="post">
        <label>Euros a pesetas
            <input type="radio" name="conversionType" id="toPesetas" value="toPesetas">
        </label><br>
        <label>Pesetas a euros
            <input type="radio" name="conversionType" id="toEuros" value="toEuros">
        </label><br>
        <label for="value">cantidad:</label>
        <input type="text" name="value" id="value"/><br>
        <input type="submit" value="send">
    </form>
<?php 
} else {
    if ($_POST['conversionType'] == 'toEuros') {
        echo 'Serían ',$_POST['value']/166.39,' euros.<br>';
    } else {
        echo 'Serían ',$_POST['value']*166.39,' pesetas.<br>';
    }
}
?>
</body>
</html>