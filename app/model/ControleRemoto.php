<?php

require_once 'app/interfaces/Controlador.php';

class ControleRemoto implements Controlador
{
    private $volume;
    private $ligado;
    private $tocando;

    public function __construct()
    {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    private function getVolume()
    {
        return $this->volume;
    }

    private function getLigado()
    {
        return $this->ligado;
    }

    private function getTocando()
    {
        return $this->tocando;
    }

    private function setVolume($volume)
    {
        $this->volume = $volume;
    }

    private function setLigado($ligado)
    {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando)
    {
        $this->tocando = $tocando;
    }

    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
    }

    public function abrirMenu()
    {
        $msgLigado = 'Ligado: ' . ($this->getLigado() ? 'Sim' : 'Não');
        $msgTocando = 'Tocando: ' . ($this->getTocando() ? 'Sim' : 'Não');
        $msgVolume = 'Volume: ' . $this->getVolume();

        $barrasMenu = '';

        for ($i = 0; $i <= $this->getVolume(); $i += 10) {
            $barrasMenu .= '|';
        }

        echo "$msgLigado\n$msgTocando\n$msgVolume\n$barrasMenu\n";
    }

    public function fecharMenu()
    {
        echo "Fechando menu \n";
    }

    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 10);
        } else {
            echo "Erro: Não posso aumentar o volume!\n";
        }
    }

    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 10);
        } else {
            echo "Erro: Não posso aumentar o volume!\n";
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() && !$this->getTocando()) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
}