<?php

require_once __DIR__ . '/IVeiculo.php';
require_once __DIR__ . '/ICombustivel.php';
require_once __DIR__ . '/IMotorizado.php';


class Carro implements IVeiculo, ICombustivel, IMotorizado
{
    public function abastecer(): void
    {
        echo "Abastecendo o carro com gasolina...<br>";
    }

    public function ligarMotor(): void
    {
        echo "Motor do carro ligado.<br>";
    }

    public function mover(): void
    {
        echo "Carro em movimento.<br>";
    }
}