<?php
require_once "Animal.php";

class Peixe extends Animal
{
    private $corEscama;

    public function getCorEscama()
    {
        return $this->corEscama;
    }


    public function setCorEscama($corEscama): self
    {
        $this->corEscama = $corEscama;
        return $this;
    }

    public function locomover()
    {
        echo "<p>Nadando.</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo Substâncias.</p>";
    }

    public function emitirSom()
    {
        echo "<p>Peixe não faz som.</p>";
    }

    public function soltarBolha()
    {
        echo "<p>Soltou um Bolha.</p>";
    }
}
