<?php
require_once "AcoesVideo.php";
class Video implements AcoesVideo
{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAvaliacao()
    {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao): self
    {
        if ($this->getViews() > 0) {
            $mediasDasAvaliacoes = ($this->getAvaliacao() + $avaliacao) / $this->getViews();
            $this->avaliacao = $mediasDasAvaliacoes;
            
        } else {
            $this->avaliacao = 0;
        }return $this;
    }

    public function getViews()
    {
        return $this->views;
    }

    public function setViews($views): self
    {
        $this->views = $views;
        return $this;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas): self
    {
        $this->curtidas = $curtidas;
        return $this;
    }

    public function getReproduzindo()
    {
        return $this->reproduzindo;
    }

    public function setReproduzindo($reproduzindo): self
    {
        $this->reproduzindo = $reproduzindo;
        return $this;
    }

    public function __construct($titulo)
    {
        $this->setTitulo($titulo);
        $this->setAvaliacao(1);
        $this->setViews(0);
        $this->setCurtidas(0);
        $this->setReproduzindo(false);
    }

    public function play()
    {
        if ($this->getReproduzindo()) {
            echo "<p>O vídeo já está reproduzindo.</p>";
        } else {
            $this->setReproduzindo(true);
        }
    }
    public function pause()
    {
        if (!($this->getReproduzindo())) {
            echo "<p>O vídeo já está pausado.</p>";
        } else {
            $this->setReproduzindo(false);
        }
    }
    public function like()
    {
        $this->setCurtidas($this->getCurtidas() + 1);
    }
}
