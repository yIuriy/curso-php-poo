<?php
require_once "Video.php";
require_once "Gafanhoto.php";

class Visualizacao
{
    private $espectador;
    private $filme;

    public function getEspectador()
    {
        return $this->espectador;
    }

    public function setEspectador($espectador): self
    {
        $this->espectador = $espectador;
        return $this;
    }

    public function getFilme()
    {
        return $this->filme;
    }

    public function setFilme($filme): self
    {
        $this->filme = $filme;
        return $this;
    }

    public function __construct($espectador, $filme)
    {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->getFilme()->setViews($filme->getViews() + 1);
        $this->getEspectador()->setTotAssistido($espectador->getTotAssistido() + 1);
    }

    public function avaliar()
    {
        $this->getFilme()->setAvaliacao(5);
    }
    public function avaliarPorNota($nota)
    {
        $this->getFilme()->setAvaliacao($nota);
    }

    public function avaliarPorPorcentagem($porcentagem)
    {
        $novaNota = 0;
        if ($porcentagem <= 20) {
            $novaNota = 3;
        } else if ($porcentagem <= 50) {
            $novaNota = 5;
        } else if ($porcentagem <= 90) {
            $novaNota = 8;
        } else {
            $novaNota = 10;
        }
        $this->getFilme()->setAvaliacao($novaNota);
    }
}
