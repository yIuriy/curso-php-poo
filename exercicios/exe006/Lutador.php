<?php
class Lutador
{
    private $nome;

    private $nacionalidade;

    private $idade;

    private $altura;

    private $peso;    //Leve Médio Pesado

    private $categoria;

    private $vitorias;

    private $derrotas;

    private $empates;

    //Métodos Especiais

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    public function setNacionalidade($nacionalidade): self
    {
        $this->nacionalidade = $nacionalidade;
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

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura): self
    {
        $this->altura = $altura;
        return $this;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): self
    {
        $this->peso = $peso;
        $this->setCategoria();
        return $this;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    private function setCategoria(): self
    {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } else if ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } else if ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } else if ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
        return $this;
    }

    public function getVitorias()
    {
        return $this->vitorias;
    }

    public function setVitorias($vitorias): self
    {
        $this->vitorias = $vitorias;
        return $this;
    }

    public function getDerrotas()
    {
        return $this->derrotas;
    }

    public function setDerrotas($derrotas): self
    {
        $this->derrotas = $derrotas;
        return $this;
    }

    public function getEmpates()
    {
        return $this->empates;
    }

    public function setEmpates($empates): self
    {
        $this->empates = $empates;
        return $this;
    }

    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates)
    {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    //Métodos 
    public function apresentar()
    {
        echo "<br>----------------------------<br>";
        echo "<p>Nome: " . $this->getNome() . "</p>";
        echo "<p>Nacionalidade: " . $this->getNacionalidade() . "</p>";
        echo "<p>Idade: " . $this->getIdade() . "</p>";
        echo "<p>Altura: " . $this->getAltura() . "</p>";
        echo "<p>Peso: " . $this->getPeso() . "</p>";
        echo "<p>Categoria: " . $this->getCategoria() . "</p>";
        echo "<p>Vitorias: " . $this->getVitorias() . "</p>";
        echo "<p>Derrotas: " . $this->getDerrotas() . "</p>";
        echo "<p>Empates: " . $this->getEmpates() . "</p>";
    }
    public function status()
    {
        echo "<p>" . $this->getNome() . " é um peso " . $this->getCategoria() . " com " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates.</p>";
    }

    public function ganharLuta()
    {
        $this->setVitorias(($this->getVitorias() + 1));
    }

    public function perderLuta()
    {
        $this->setDerrotas(($this->getDerrotas() + 1));
    }

    public function empatarLuta()
    {
        $this->setEmpates(($this->getEmpates() + 1));
    }
}
