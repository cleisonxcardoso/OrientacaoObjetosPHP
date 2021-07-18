<?php


namespace App\model;


class Luta
{
    public ?Lutador $desafiado;
    private ?Lutador $desafiante;
    private int $rounds;
    private bool $aprovada;

    public function marcarLuta(Lutador $lutador1, Lutador $lutador2)
    {
        if ($lutador1->getCategoria() === $lutador2->getCategoria() && $lutador1 !== $lutador2) {
            $this->aprovada = true;
            $this->desafiante = $lutador1;
            $this->desafiado = $lutador2;
        } else {
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }

    public function lutar()
    {
        if ($this->aprovada) {
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0, 2);

            switch ($vencedor) {
                case 0:
                    echo "Empate\n";
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1:
                    echo "{$this->getDesafiado()->getNome()} venceu!\n";
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2:
                    echo "{$this->getDesafiante()->getNome()} venceu!\n";
                    $this->getDesafiante()->ganharLuta();
                    $this->getDesafiado()->perderLuta();
                    break;
            }
        }else{
            echo "A luta não pode acontecer!\n";
        }
    }

    public function getDesafiado()
    {
        return $this->desafiado;
    }

    public function setDesafiado($desafiado): void
    {
        $this->desafiado = $desafiado;
    }

    public function getDesafiante()
    {
        return $this->desafiante;
    }

    public function setDesafiante($desafiante): void
    {
        $this->desafiante = $desafiante;
    }

    public function getRounds()
    {
        return $this->rounds;
    }

    public function setRounds($rounds): void
    {
        $this->rounds = $rounds;
    }

    public function getAprovada()
    {
        return $this->aprovada;
    }

    public function setAprovada($aprovada): void
    {
        $this->aprovada = $aprovada;
    }

}