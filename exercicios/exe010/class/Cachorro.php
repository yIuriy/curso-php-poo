<?php
require_once "Mamifero.php";

class Cachorro extends Mamifero
{

    public function emitirSom()
    {
        echo "<p>Latindo.</p>";
    }
    public function enterrarOsso()
    {
        echo "<p>Enterrando Osso.</p>";
    }

    public function abanarRabo()
    {
        echo "<p>Abanando o Rabo.</p>";
    }
}
