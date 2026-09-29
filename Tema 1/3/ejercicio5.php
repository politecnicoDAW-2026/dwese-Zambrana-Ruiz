<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>

    <?php
    $value = 2;
    $divisor=0;
    $noPrimo=false;
    do {
        $divisor=$value;
        while($divisor>1 && $noPrimo==false) {
            if($value%$divisor==0 && $value!==$divisor) {
            $noPrimo=true;
            }
            --$divisor;
        }
        if (!$noPrimo) {
            echo $value,' es primo.<br>';
        }
        $noPrimo=false;
        $value += 1;
    } while ($value <= 100);
    ?>
    
</body>
</html>