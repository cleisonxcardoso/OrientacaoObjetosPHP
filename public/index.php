<?php

require __DIR__ . '/../vendor/autoload.php';

use App\model\Pessoa;

$p = new Pessoa('Cleison',
    '10571526926',
    null,
    1.72,
    23
);

print_r($p);
