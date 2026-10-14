<?php

use ejercicio2\Cubilete;

include_once 'Cubilete.php';
$cubilete = new Cubilete();

echo 'Voy a tirar 3 dados: '.$cubilete->throwDice(3).'<br>';
echo 'Ahora, otros 3 dados: '.$cubilete->throwDice(3).'<br>';
echo 'Otra vez: '.$cubilete->throwDice(3).'<br>';
echo 'Ahora 6 dados: '.$cubilete->throwDice(6).'<br>';
echo 'Los 3 dados anteriores: '.$cubilete->lastThrow().'<br>';
echo 'Y el número de intentos: '.$cubilete->numberOfThrows().'<br>';
