<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$animals=array("Lagartija"=>20,"Araña"=>34,"Perro"=>45,"Gato"=>52,"Ratón"=>34);
$mostlyTrees=array("Sauce","Pino","Naranjo","Chopo","Perro"=>34);
echo "<p>Insertados ",array_push($animals,$mostlyTrees)," elementos</p>";

var_dump($animals);
?>

</body>
</html>
