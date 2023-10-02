<?php
require_once "Controlador.php";
class ControleRemoto implements Controlador
{
    private $volume;

    private $ligado;

    private $tocando;

    // Métodos Especiais
    function __construct()
    {
        $this->setVolume(50);
        $this->setLigado(false);
        $this->setTocando(false);
    }

    private function getVolume()
    {
        return $this->volume;
    }
    private  function setVolume($volume): self
    {
        $this->volume = $volume;
        return $this;
    }
    private  function getLigado()
    {
        return $this->ligado;
    }

    private  function setLigado($ligado): self
    {
        $this->ligado = $ligado;
        return $this;
    }
    private  function getTocando()
    {
        return $this->tocando;
    }

    private  function setTocando($tocando): self
    {
        $this->tocando = $tocando;
        return $this;
    }

    // Métodos de Interface
    public function ligar()
    {
        $this->setLigado(true);
    }

    public function desligar()
    {
        $this->setLigado(false);
        $this->setTocando(false);
    }

    public function abrirMenu()
    {
        echo "<br>Ligado: " . ($this->getLigado() ? "Sim<br>" : "Não<br>");
        echo "Tocando: " . ($this->getTocando() ? "Sim<br>" : "Não<br>");
        echo "Volume: ";
        for ($i = 10; $i <= $this->getVolume(); $i += 10) {
            echo "|";
        };
        echo "<br>";
    }

    public function fecharMenu()
    {
        echo "<br>Fechando Menu...";
    }

    public function maisVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 1);
        } else {
            echo "<br>A TV está desligada!";
        }
    }


    public function menosVolume()
    {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 1);
        } else {
            echo "<br>A TV está desligada!";
        }
    }

    public function ligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolume(0);
        }
    }

    public function desligarMudo()
    {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }
    }

    public function play()
    {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause()
    {
        if ($this->getLigado() && $this->getTocando())
            $this->setTocando(false);
    }
}
