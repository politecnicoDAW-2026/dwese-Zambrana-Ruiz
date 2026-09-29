<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $persona=array("Nombre"=>"Pedro Torres","Direccion"=>"C/ Mayor, 37","Teléfono:"=>123456789);
    foreach ($persona as $index => $value) {
        echo '<p>',$index,': ',$value,'</p>';
    }
?>

</body>
</html>


Nombre: Pedro Torres
Dirección: C/ Mayor, 37
Teléfono: 123456789
