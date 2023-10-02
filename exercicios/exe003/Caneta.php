<?php
class Caneta3
{
    private $modelo;
    private $cor;
    private $ponta;

    private $tampada;

    public function __construct($modelo, $cor, $ponta)
    {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ponta = $ponta;
        $this->tampar();
    }

    public function tampar()
    {
        $this->tampada = true;
    }

    public function destampar()
    {
        $this->tampada = false;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($novoModelo)
    {
        $this->modelo = $novoModelo;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($novaPonta)
    {
        $this->ponta = $novaPonta;
    }
}
