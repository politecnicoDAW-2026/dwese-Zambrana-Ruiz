<?php

namespace ejercicio3;
class Zona
{

    protected string $zoneName;
    protected int $capacity;
    protected int $ticketsLeft;
    protected int $currentVisitorCount;

    public function __construct(int $capacity, string $zoneName)
    {
        $this->capacity = $capacity;
        $this->zoneName = $zoneName;
    }

    public function __toString(): string
    {
        return 'Hay aforo para ' . $this->capacity . ' personas, y quedan ' . $this->ticketsLeft . ' entradas.';
    }

    public function getTicketsLeft(): int
    {
        return $this->ticketsLeft;
    }

    public function buyTicket(int $amount)
    {
        if ($amount > 0 && $amount <= $this->ticketsLeft) $this->ticketsLeft = $this->ticketsLeft - $amount;
    }

    public function getVisitorCount(): int
    {
        return $this->currentVisitorCount;
    }
}