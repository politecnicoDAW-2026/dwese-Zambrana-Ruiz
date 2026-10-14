<?php

namespace ejercicio1;

include_once 'Vehiculo.php';

class Bicicleta extends Vehiculo
{
    public function __construct()
    {
        parent::__construct();
        $ring = false;
    }

    public function accelerateBike($speedIncrease): int
    {
        //there's no traveled distance... So I cannot really increase the km count accurately...
        $this->totalKilometerCount += $speedIncrease;
        $this->currentKilometerCount += $speedIncrease;
        return $this->vehicleSpeed += $speedIncrease;
    }

    public function decelerateBike($speedDecrease): int
    {
        return $this->vehicleSpeed -= $speedDecrease;
    }

    public function doRing(): string
    {
        return 'Ring ring!';
    }
}