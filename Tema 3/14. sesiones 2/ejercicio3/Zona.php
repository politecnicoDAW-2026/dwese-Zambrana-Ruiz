<?php

namespace ejercicio3;

class Zona
{
    protected int $ticketsLeft;
    protected int $currentVisitorCount = 0;

    public function __construct(private int $capacity, private string $zoneName)
    {
        $this->ticketsLeft = $capacity;
    }

    public function __toString(): string
    {
        return 'Hay aforo para ' . $this->capacity . ' personas, y quedan ' . $this->ticketsLeft . ' entradas.';
    }

    public function getTicketsLeft(): int
    {
        return $this->ticketsLeft;
    }

    public function buyTicket(int $amount): bool
    {
        if ($amount > 0 && $amount <= $this->ticketsLeft) {
            $this->ticketsLeft -= $amount;
            return true;
        }
        return false;
    }

    public function getVisitorCount(): int
    {
        return $this->currentVisitorCount;
    }
}