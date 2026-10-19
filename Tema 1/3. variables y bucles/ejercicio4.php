<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <?php
    $iteracciones=30;
    $contadorIteracciones=0;
    $numerosPrevios=array(0,1);

    echo '<p>',0,'</p>';

    while ($contadorIteracciones < $iteracciones) {
        $numerosPrevios[0]=$numerosPrevios[0]+$numerosPrevios[1];
        echo '<p>',$numerosPrevios[0],'</p>';
        $contadorIteracciones++;
        $numerosPrevios[1]=$numerosPrevios[0]+$numerosPrevios[1];
        echo '<p>',$numerosPrevios[1],'</p>';
        $contadorIteracciones++;
    }
    ?>
    
</body>
</html>