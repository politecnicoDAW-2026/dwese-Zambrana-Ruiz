<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$simpsons=array('padre'=>'Homer','madre'=>'Marge', 'hijos'=>'Bart, Lisa y Maggie');
$griffin=array('padre'=>'Peter', 'madre'=>'Lois', 'hijos'=>'Chris, Meg y Stewie');

echo 'Los simpsons: <ul>';
foreach ($simpsons as $index => $value) {
    echo '<li>',$index,' : ',$value,'</li>';
}
echo '</ul>';
echo 'Los griffin: <ul>';
foreach ($griffin as $index => $value) {
    echo '<li>',$index,' : ',$value,'</li>';
}
echo '</ul>';
?>

</body>
</html>