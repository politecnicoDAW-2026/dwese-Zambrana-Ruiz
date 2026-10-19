<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $Cities=array("Madrid","Barcelona","Londres","New york","Los angeles","Chicago");

    foreach($Cities as $index => $value) {
        echo '<p>La ciudad ',$value,' usa el siguiente índice: ',$index,'</p>';
    }
?>

</body>
</html>
