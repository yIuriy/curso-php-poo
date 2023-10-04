<?php
require_once "Pessoa1.php";

class Funcionario extends Pessoa1
{
    private $setor;
    private $isTrabalhando;

    public function getSetor()
    {
        return $this->setor;
    }

    public function setSetor($setor): self
    {
        $this->setor = $setor;
        return $this;
    }

    public function getIsTrabalhando()
    {
        return $this->isTrabalhando;
    }

    public function setIsTrabalhando($isTrabalhando): self
    {
        $this->isTrabalhando = $isTrabalhando;
        return $this;
    }

    public function mudarTrabalhando()
    {
        if ($this->getIsTrabalhando()) {
            $this->setIsTrabalhando(false);
        } else {
            $this->setIsTrabalhando(true);
        }
    }
}
