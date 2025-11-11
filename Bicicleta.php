<?php 

require_once __DIR__ . '/IVeiculo.php';

class Bicicleta implements IVeiculo
{
    public function mover(): void
    {
        echo "Bicicleta pedalando.<br>";
    }
}