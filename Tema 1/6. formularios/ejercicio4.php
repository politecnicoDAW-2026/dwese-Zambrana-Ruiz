<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (!isset($_POST['numberOne'])) { ?>

<h1>Introduzca dos números</h1>
<form action="/tema%202/formularios%201/ejercicio4.php" method="post">
    <label for="numberOne">Número 1:</label>
    <input type="text" name="numberOne" id="numberOne"/><br>
    <label for="numberTwo">Número 2:</label>
    <input type="text" name="numberTwo" id="numberTwo"/><br>

    <input type="submit" value="send">

</form>
<?php 
} else {
    echo $_POST['numberOne'],'+',$_POST['numberTwo'],' = ',$_POST['numberOne']+$_POST['numberTwo'],'<br>';
    echo $_POST['numberOne'],'-',$_POST['numberTwo'],' = ',$_POST['numberOne']-$_POST['numberTwo'],'<br>';
    echo $_POST['numberOne'],'*',$_POST['numberTwo'],' = ',$_POST['numberOne']*$_POST['numberTwo'],'<br>';
    echo $_POST['numberOne'],'/',$_POST['numberTwo'],' = ',$_POST['numberOne']/$_POST['numberTwo'],'<br>';
    echo $_POST['numberOne'],'%',$_POST['numberTwo'],' = ',$_POST['numberOne']%$_POST['numberTwo'],'<br>';
}
    ?>
</body>
</html>