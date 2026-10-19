<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayNumerosPares=array(2,4,6,8,10,12,14,16,18,20);
        foreach ($arrayNumerosPares as $index => $valor) {
            echo '<p>Posición ',$index,', Valor ',$valor,'</p>';
        }
    ?>
</body>
</html>