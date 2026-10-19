<?php

namespace ejercicio1;
abstract class Vehiculo
{
    protected static int $vehicleInstancesCount = 0;
    protected int $vehicleInstanceNumber;
    protected int $totalKilometerCount = 0;
    protected int $currentKilometerCount = 0;
    protected int $vehicleSpeed = 0;

    public function __construct()
    {
        self::$vehicleInstancesCount++;
        $this->vehicleInstanceNumber = self::$vehicleInstancesCount;
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