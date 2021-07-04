<?php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../app/model/Caneta.php';

$c1 = new Caneta();

$c1->cor = "Azul";
$c1->ponta = 0.5;
$c1->tampada = false;
$c1->tampar();

print_r($c1);

$c2 = new Caneta();
$c2->cor = "Verde";
$c2->carga = 50;
$c2->tampar();

print_r($c2);
