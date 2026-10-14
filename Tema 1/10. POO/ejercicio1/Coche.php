<?php

namespace ejercicio1;

include_once 'Vehiculo.php';

class Coche extends Vehiculo
{
    protected bool $headlightEnabled = false;

    public function __construct()
    {
        parent::__construct();
    }

    public function accelerateCar($speedIncrease): int
    {
        //there's no traveled distance... So I cannot really increase the km count accurately...
        $this->totalKilometerCount += $speedIncrease;
        $this->currentKilometerCount += $speedIncrease;
        return $this->vehicleSpeed += $speedIncrease;
    }

    public function decelerateCar($speedDecrease): int
    {
        return $this->vehicleSpeed -= $speedDecrease;
    }

    public function toggleLights(): bool
    {
        return $this->headlightEnabled = !$this->headlightEnabled;
    }
}