<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numbers=array(5=>1,12=>2,13=>56,'x'=>42);
var_dump($numbers);
echo '<br>','<br>';
echo 'El array contiene ',count($numbers),' números';
unset($numbers[5]);
echo '<br>','<br>';
var_dump($numbers);
unset($numbers);
echo '<br>','<br>';
?>

</body>
</html>