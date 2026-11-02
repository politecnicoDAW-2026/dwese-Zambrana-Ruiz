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
        $this->lastThrow = [];
        for ($counter = 0; $counter < $tries; $counter++) {
            $this->lastThrow[] = $this->dados->random();
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