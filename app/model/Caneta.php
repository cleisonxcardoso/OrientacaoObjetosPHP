<?php


class Caneta
{
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    /**
     * Caneta constructor.
     * @param $modelo
     * @param $ponta
     * @param $tampada
     * @param $cor
     */
    public function __construct($modelo, $ponta, $tampada, $cor)
    {
        $this->modelo = $modelo;
        $this->ponta = $ponta;
        $this->tampada = $tampada;
        $this->cor = $cor;
    }


    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo): void
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getPonta()
    {
        return $this->ponta;
    }

    /**
     * @param mixed $ponta
     */
    public function setPonta($ponta): void
    {
        $this->ponta = $ponta;
    }

    /**
     * @return mixed
     */
    public function getTampada()
    {
        return $this->tampada;
    }

    /**
     * @param mixed $tampada
     */
    public function setTampada($tampada): void
    {
        $this->tampada = $tampada;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor): void
    {
        $this->cor = $cor;
    }

}