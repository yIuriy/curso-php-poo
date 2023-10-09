<?php
require_once "Animal.php";

class Reptil extends Animal
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
        echo "<p>Rastejando.</p>";
    }

    public function alimentar()
    {
        echo "<p>Comendo vegetais.</p>";
    }

    public function emitirSom()
    {
        echo "<p>Som de Réptil.</p>";
    }
}
