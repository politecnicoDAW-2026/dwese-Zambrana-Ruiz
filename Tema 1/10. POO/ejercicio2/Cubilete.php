<?php

namespace ejercicio2;

include_once 'DadoPoker.php';

class Cubilete
{
    protected array $lastThrow = [];
    protected int $numberOfThrows = 0;
    protected DadoPoker $dados;

    public function __construct()
    {
        $this->dados = new DadoPoker();
    }

    public function throwDice(int $tries): string
    {
        for ($counter = 0; $counter < $tries; $counter++) {
            $this->lastThrow[$counter] = $this->dados->random();
        }
        while (count($this->lastThrow) < ($tries)) {
            array_pop($this->lastThrow);
        }
        $this->numberOfThrows++;
        return implode(', ', $this->lastThrow);
    }

    public function lastThrow(): string
    {
        return implode(', ', $this->lastThrow);
    }

    public function numberOfThrows(): int
    {
        return $this->numberOfThrows;
    }
}