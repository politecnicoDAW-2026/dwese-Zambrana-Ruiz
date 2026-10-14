<?php

namespace ejercicio1;
abstract class Vehiculo
{
    protected static int $vehicleInstancesCount = 0;
    protected int $vehicleInstanceNumber;
    protected int $totalKilometerCount;
    protected int $currentKilometerCount;
    protected int $vehicleSpeed;

    public function __construct()
    {
        self::$vehicleInstancesCount++;
        $this->vehicleInstanceNumber = self::$vehicleInstancesCount;
        $this->totalKilometerCount = 0;
        $this->currentKilometerCount = 0;
        $this->vehicleSpeed = 0;
    }

    public function getVehiculosCreados(): int
    {
        return self::$vehicleInstancesCount;
    }

    public function getVehiculoInstanceNumber(): int
    {
        return $this->vehicleInstanceNumber;
    }

    public function getKmTotales(): int
    {
        return $this->totalKilometerCount;
    }

    public function getKmRecorridos(): int
    {
        return $this->currentKilometerCount;
    }
}