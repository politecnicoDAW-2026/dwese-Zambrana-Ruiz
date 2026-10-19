<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if (!isset($_POST['age'])) { ?>
    <h1>Introduzca sus datos</h1>
    <form action="/tema%202/formularios%201/ejercicio8.php" method="post">
        <label>Edad:
            <input type="text" name="age" id="age">
        </label><br>
        <label>Estudiante:
            <input type="checkbox" name="isStudent" value="yes">
        </label><br>
        <input type="submit" value="send">
    </form>
<?php 
} else {
    var_dump($_POST);
    echo '<br>';
    if ($_POST['age'] < 12 || isset($_POST['isStudent']) ) {
        echo 'Serían 3.5 euros<br>';
    } else {
        echo 'Serían 5 euros<br>';
    }
}
?>
</body>
</html>