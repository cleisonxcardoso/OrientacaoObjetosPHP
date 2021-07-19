<?php

require __DIR__ . '/../vendor/autoload.php';

use App\model\Pessoa;
use App\model\Aluno;
use App\model\Professor;
use App\model\Funcionario;

$p1 = new Pessoa();
$p2 = new Aluno();
$p3 = new Professor();
$p4 = new Funcionario();

$p1->setNome("Pedro");
$p1->setSexo("M");

$p2->setNome("Maria");
$p2->setCurso("Informatica");

$p3->setNome("Claudio");
$p3->setSalario(2500.10);

$p4->setNome("Fabiana");
$p4->setSexo("F");

$p3->receberAumento(550.20);
$p4->mudarTrabalho();
$p2->cancelarMatricula();

print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);