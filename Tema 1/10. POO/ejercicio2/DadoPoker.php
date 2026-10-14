<?php

namespace ejercicio2;
class DadoPoker
{
    protected array $diceFaces = ['As', 'K', 'Q', 'J', '7', '8'];

    public function __construct()
    {
    }

    public function random(): string
    {
        return $this->diceFaces[random_int(0, 5)];
    }
}