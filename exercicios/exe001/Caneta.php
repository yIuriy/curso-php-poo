<?php
class Caneta1
{
    var $modelo;
    var  $cor;
    var $ponta;
    var $carga;
    var $tampada;

    function rabiscar()
    {
        if ($this->tampada) {
            echo "<p>ERRO! A caneta está tampada!</p>";
        } else {
            echo "<p>Rabiscando...!</p>";
        };
    }
    function tampar()
    {
        $this->tampada = true;
    }
    function destampar()
    {
        $this->tampada = false;
    }
};
