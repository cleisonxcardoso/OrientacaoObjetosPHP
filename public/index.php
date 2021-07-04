<?php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../app/model/Caneta.php';

$c1 = new Caneta();
$c1->modelo = "Bic Cristal";
$c1->cor = "Azul";
//$c1->ponta = 0.5;
//$c1->carga = 99;
//$c1->tampada = true;

$c1->rabiscar();
$c1->destampar();

print_r($c1);
