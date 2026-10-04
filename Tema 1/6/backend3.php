<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    print_r ($_POST);
    echo '<br>';

    if(empty($_POST['soda']) && empty($_POST['amount'])) {
        echo "<p>Faltan valores</p>";
    } else {
        echo 'Has pedido ',$_POST['amount'],' libretas';
        echo '<br>';

        if ($_POST['amount'] < 10) {
            echo 'Precio total: ',$_POST['amount']*2,' euros.';
        } else if ($_POST['amount'] < 30) {
            echo 'Precio total: ',$_POST['amount']*1.5,' euros.';
        } else {
            echo 'Precio total: ',$_POST['amount']*1,' euros.';
        }
    }
    echo '<br>';


    ?>

    <a href="/tema%202/formularios%201/ejercicio3.php">volver</a>
</body>
</html>