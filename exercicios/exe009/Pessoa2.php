<?php
abstract class Pessoa2
{
    private $nome;

    private $idade;

    private $sexo;

    // Métodos Especiais

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
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

    public function getSexo()
    {
        return $this->sexo;
    }

    public function setSexo($sexo): self
    {
        $this->sexo = $sexo;
        return $this;
    }

    final public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }
}
