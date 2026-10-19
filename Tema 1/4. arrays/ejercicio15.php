<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numeros = array(3, 2, 8, 123, 5, 1);

sort($numeros);

echo '<table><tr>';
foreach ($numeros as $index => $value) { //I need to get the th first, so sadly i need two loops
    echo '<th>',$index.'</th>';
}
echo '</tr>';
foreach ($numeros as $value) { //I need to get the th first, so sadly i need two loops
    echo '<td>',$value.'</td>';
}
echo '</table>';
?>

</body>
</html>