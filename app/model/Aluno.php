<?php


namespace App\model;


class Aluno extends Pessoa
{
    private $matricula;
    private $curso;

    public function cancelarMatricula()
    {
        echo "Matricula cancelada!\n";
    }

    public function getMatricula()
    {
        return $this->matricula;
    }

    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

}