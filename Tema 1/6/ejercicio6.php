<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if (!isset($_POST['euros'])) { ?>

    <h1>Introduzca la cantidad a convertir a pesetas</h1>
    <form action="/tema%202/formularios%201/ejercicio6.php" method="post">
        <label for="euros">euros:</label>
        <input type="text" name="euros" id="euros"/><br>

        <input type="submit" value="send">

    </form>
<?php 
} else {
    echo 'Serían ',$_POST['euros']*166.39,' pesetas.<br>';
}
?>
</body>
</html>