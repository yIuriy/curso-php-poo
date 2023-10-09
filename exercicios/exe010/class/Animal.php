<?php
abstract class Animal
{
    protected $peso;
    protected $idade;
    protected $membros;

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;
        return $this;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function setIdade($idade): self
    {
        $this->idade = $idade;
        return $this;
    }

    public function getMembros()
    {
        return $this->membros;
    }

    public function setMembros($membros): self
    {
        $this->membros = $membros;
        return $this;
    }

    abstract public function locomover();

    abstract public function alimentar();

    abstract public function emitirSom();
}
