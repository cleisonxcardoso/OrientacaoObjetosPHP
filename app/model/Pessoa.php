<?php


namespace App\model;


use App\interfaces\AndarInterface;
use App\interfaces\ChutarInterface;
use App\interfaces\CorrerInterface;

class Pessoa implements AndarInterface, CorrerInterface, ChutarInterface
{
    private string $nome;
    private string $cpf;
    private string $email;
    private float $altura;
    private int $idade;

    public function __construct(
        string $nome,
        string $cpf,
        string $email,
        float $altura,
        int $idade)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->setEmail($email);
        $this->altura = $altura;
        $this->idade = $idade;
    }

    private function validaEmail($email): bool
    {
        return strpos($email, '@');
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        if ($this->validaEmail($email)) {
            $this->email = $email;
        } else {
            echo "Email inválido";
        }
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura): void
    {
        $this->altura = $altura;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function setIdade(int $idade): void
    {
        $this->idade = $idade;
    }

    public function andar(float $velocidade)
    {
        // TODO: Implement andar() method.
    }

    public function correr(float $velocidade)
    {
        // TODO: Implement correr() method.
    }

    public function chutar(int $forca)
    {
        // TODO: Implement chutar() method.
    }
}