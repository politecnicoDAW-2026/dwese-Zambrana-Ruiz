<?php

use ejercicio1\Bicicleta;
use ejercicio1\Coche;

include_once 'Vehiculo.php';
include_once 'Bicicleta.php';
include_once 'Coche.php';

$toyotaYaris = new Coche();
$bicicletaToFlama = new Bicicleta();

echo 'Acelerando el coche en: '. $toyotaYaris->accelerateCar(40).'<br>';
echo 'Oh mira! una bici! '. $bicicletaToFlama->accelerateBike(20).'<br>';
echo '- El ciclista usó el pito '.$bicicletaToFlama->doRing().'<br>';
echo '- El coche encendió las luces '. $toyotaYaris->toggleLights().'<br>';
echo 'Accidente, ahora ambos están a 0km/h'.'<br>';
$toyotaYaris->decelerateCar(40);
$bicicletaToFlama->decelerateBike(20);

