<?php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../app/model/Caneta.php';

$c1 = new Caneta(
    'BIC',
    0.5,
    true,
    'Azul'
);

print_r($c1);
