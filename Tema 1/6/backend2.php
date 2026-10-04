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
        echo 'Has pedido ',$_POST['amount'],' unidades de ',$_POST['soda'];
        echo '<br>';
        echo 'Precio total: ',$_POST['amount']*getPrices($_POST['soda']),' euros.';
    }
    echo '<br>';

    function getPrices($sodaName) {
        switch ($sodaName) {
            case "cocaCola":
                return 1;
                break;
            case "pepsi":
                return 0.8;
                break;
            case "fantaNaranja":
                return 0.9;
                break;
            case "trinaManzana":
                return 1.2;
                break;
            default:
                break;
        }
    }
    ?>

    <a href="/tema%202/formularios%201/ejercicio2.php">volver</a>
</body>
</html>