<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $int10=array(0,1,2,3,4,5,6,7,8,9);
    $evenInts=[];
    $unEvenInts=[];
    //voy a recorrerlo a mano, simplemente para trastear
    while(current($int10)){
        if (current($int10)%2==0){
            $evenInts[]=current($int10);
        } else {
            $unEvenInts[]=current($int10);
        }
        next($int10);
    }
    var_dump($evenInts);
    echo '<br>';
echo '<br>';
var_dump($unEvenInts);


?>

</body>
</html>