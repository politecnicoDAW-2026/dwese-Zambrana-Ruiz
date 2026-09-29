<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$amigosMadrid=array('nombre'=>'Pedro','edad'=>32,'teléfono'=>'91-999.99.99');
$amigosBarcelona=array('nombre'=>'Susana', 'edad'=>34,'teléfono'=>'93-000.00.00');
$amigosToledo=array('nombre'=>'Sonia','edad'=>42,'teléfono'=>'925-09.09.09');
$amigos=array('Madrid'=>'nombre Pedro, edad 32, teléfono 91-999.99.99',
    'Barcelona'=>'nombre Susana, edad 34, teléfono 93-000.00.00',
    'Toledo'=>'nombre Sonia, edad 42, teléfono 925-09.09.09');

foreach ($amigos as $index=>$value) {
    echo '<p>',$index,' : ',$value,'</p>';
}
?>

</body>
</html>