<?php
class Pessoa
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

    public function __construct(string $nome, int $idade, string $sexo)
    {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setSexo($sexo);
    }

    public function fazerAniversario()
    {
        $this->setIdade($this->getIdade() + 1);
    }

    public function apresentar()
    {
        echo "<p>Nome: " . $this->getNome() . "</p>";
        echo "<p>Idade: " . $this->getIdade() . "</p>";
        echo "<p>Sexo: " . $this->getSexo() . "</p>";
    }
}
