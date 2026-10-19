<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$estadios_futbol = array("Barcelona" => "Camp Nou", "Real Madrid"=>"Santiago Bernabeu", "Valencia" => "Mestalla", "Real Sociedad" => "Anoeta");

foreach($estadios_futbol as $index => $value) {
    echo '<p>El equipo ',$value,' usa el siguiente estadio: ',$index,'</p>';
}

unset($estadios_futbol['Real Madrid']);
echo '<br> Equipo eliminado <br><br>';

foreach($estadios_futbol as $index => $value) {
    echo '<p>El equipo ',$value,' usa el siguiente estadio: ',$index,'</p>';
}
?>

</body>
</html>