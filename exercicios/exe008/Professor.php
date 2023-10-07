<?php
require_once "Pessoa1.php";

class Professor extends Pessoa1
{
    private $especialidade;
    private $salario;

    //Métodos Especiais
    public function getEspecialidade()
    {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade): self
    {
        $this->especialidade = $especialidade;
        return $this;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario): self
    {
        $this->salario = $salario;
        return $this;
    }

    public function receberAumento($aumento)
    {
        $this->setSalario($this->getSalario() + $aumento);
    }
}
