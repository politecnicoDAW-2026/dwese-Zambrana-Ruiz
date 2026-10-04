<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print_r ($_GET);
        if(empty($_GET['surname']) && empty($_GET['name'])) {
            echo "<p>Faltan valores</p>";
        }
    ?>

    <a href="/tema%202/formularios%201/ejercicio1.php">volver</a>
</body>
</html>