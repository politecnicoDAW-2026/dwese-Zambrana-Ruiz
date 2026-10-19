<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>

    <?php
    $pyramidLayers=6;
    $pyramidSpaces=$pyramidLayers-1;
    $pyramidBlocks=1;

    echo str_repeat('&nbsp;&nbsp;', $pyramidSpaces);
    echo '*';
    echo '<br>';
    $pyramidLayers--;
    $pyramidBlocks=$pyramidBlocks+2;
    $pyramidSpaces--;
    do {
        echo str_repeat('&nbsp;&nbsp;', $pyramidSpaces);
        echo '*';
        echo str_repeat('&nbsp;&nbsp;', $pyramidBlocks-2);
        echo '*';
        echo '<br>';
        $pyramidLayers--;
        $pyramidBlocks=$pyramidBlocks+2;
        $pyramidSpaces--;

    } while($pyramidLayers!=1);
    echo str_repeat('*', $pyramidBlocks+$pyramidSpaces);
    ?>
    
</body>
</html>