<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $names=array("Pedro","Ismael","Sonia","Clara","Susana","Alfonso","Teresa");
    echo '<p>El array tiene ',count($names),' valores</p>';
    //list($a,$b,$c,$d,$e,$f,$g)=$names; ignorar, leí el enunciado mal
    echo '<ul>';
    foreach($names as $value) {
        echo '<li>',$value,'</li>';
    }
    echo '</ul>';
?>

</body>
</html>
