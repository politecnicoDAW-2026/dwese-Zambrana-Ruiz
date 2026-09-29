<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>

    <?php
    $pyramidLayers=6;
    $pyramidSpaces=$pyramidLayers-1;
    $pyramidBlocks=1;

    do {
        echo str_repeat('&nbsp;&nbsp;', $pyramidSpaces);
        echo str_repeat('*', $pyramidBlocks);
        echo '<br>';
        $pyramidLayers--;
        $pyramidBlocks=$pyramidBlocks+2;
        $pyramidSpaces=$pyramidSpaces-1;

    } while($pyramidLayers!=0);
    ?>
    
</body>
</html>