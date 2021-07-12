<?php

require __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../app/model/ControleRemoto.php';

$c = new ControleRemoto();
$c->maisVolume();
$c->abrirMenu();
