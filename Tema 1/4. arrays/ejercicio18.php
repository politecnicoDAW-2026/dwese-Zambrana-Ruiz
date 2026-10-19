<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$deportes=array('fútbol','baloncesto','natación','tenis');
echo 'El array deportes contiene los siguientes valores: ';
foreach($deportes as $index => $value){
    echo $value,', ';
}
echo '<br>';
echo 'valor: ',pos($deportes);
echo '<br>';
next($deportes);
echo 'valor: ',pos($deportes);
echo '<br>';
end($deportes);
echo 'valor: ',pos($deportes);
echo '<br>';
prev($deportes);
echo 'valor: ',pos($deportes);
echo '<br>';

?>

</body>
</html>
