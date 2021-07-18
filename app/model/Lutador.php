<?php


namespace App\model;


class Lutador
{
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $altura;
    private float $peso;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;

    public function __construct(
        $nomeParam,
        $nacionalidadeParam,
        $idadeParam,
        $alturaParam,
        $pesoParam,
        $vitoriasParam,
        $derrotasParam,
        $empatesParam
    )
    {
        $this->nome = $nomeParam;
        $this->nacionalidade = $nacionalidadeParam;
        $this->idade = $idadeParam;
        $this->altura = $alturaParam;
        $this->setPeso($pesoParam);
        $this->vitorias = $vitoriasParam;
        $this->derrotas = $derrotasParam;
        $this->empates = $empatesParam;
    }

    function apresentar()
    {
        $msg = "CHEGOU A HORA!\n";
        $msg .= "O lutador {$this->getNome()} veio diretamente de {$this->getNacionalidade()}, ";
        $msg .= "tem {$this->getIdade()} anos e pesa {$this->getPeso()}Kg, ";
        $msg .= "tem {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas ";
        $msg .= "e {$this->getEmpates()} empates!\n";

        echo $msg;
    }

    function status()
    {
        $msg = "Nome: {$this->getNome()}\n";
        $msg .= "Categoria: {$this->getCategoria()}\n";
        $msg .= "Vitórias: {$this->getVitorias()}\n";
        $msg .= "Derrotas: {$this->getDerrotas()}\n";
        $msg .= "Empates: {$this->getEmpates()}\n";

        echo $msg;
    }

    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): void
    {
        $this->nome = $nome;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): void
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): void
    {
        $this->idade = $idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): void
    {
        $this->altura = $altura;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria(): void
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitoriasParam): void
    {
        $this->vitorias = $vitoriasParam;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotasParam): void
    {
        $this->derrotas = $derrotasParam;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empatesParam): void
    {
        $this->empates = $empatesParam;
    }
}