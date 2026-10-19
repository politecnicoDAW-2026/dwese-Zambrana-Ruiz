<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $clientsideArray=array("JavaScript"=>"JS","html"=>"w3schools","CSS"=>"CSS3 no es un lenguaje de programacion");
    $serversideArray=array("Rust"=>"Crab",".NET"=>"Microsoft","C"=>"C99","PHP"=>"PHP");
    $programmingLanguagesArray=array_merge($clientsideArray,$serversideArray);
    foreach($programmingLanguagesArray as $value => $index) {
        echo '<p>El lenguaje ',$value,' usa el siguiente índice: ',$index,'</p>';
    }
?>

</body>
</html>