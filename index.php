<?php 

require_once __DIR__ . '/Bicicleta.php';
require_once __DIR__ . '/Carro.php';

$bicicleta = new Bicicleta();
$bicicleta->mover();
echo "<hr>";
$carro = new Carro();
$carro->abastecer();
$carro->ligarMotor();
$carro->mover();

