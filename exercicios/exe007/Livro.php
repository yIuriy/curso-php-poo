<?php
require_once "Pessoa.php";
require_once "Publicacao.php";
class Livro implements Publicacao
{
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor; //Agregado a Pessoa

    //Métodos Especiais
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): self
    {
        $this->titulo = $titulo;
        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor): self
    {
        $this->autor = $autor;
        return $this;
    }

    public function getTotalPaginas()
    {
        return $this->totalPaginas;
    }

    public function setTotalPaginas($totalPaginas): self
    {
        $this->totalPaginas = $totalPaginas;
        return $this;
    }

    public function getPaginaAtual()
    {
        return $this->paginaAtual;
    }

    public function setPaginaAtual($paginaAtual): self
    {
        $this->paginaAtual = $paginaAtual;
        return $this;
    }

    public function getAberto()
    {
        return $this->aberto;
    }

    public function setAberto($aberto): self
    {
        $this->aberto = $aberto;
        return $this;
    }

    public function getLeitor()
    {
        return $this->leitor;
    }

    public function setLeitor($leitor): self
    {
        $this->leitor = $leitor;
        return $this;
    }

    public function __construct($titulo, $autor, $totalPaginas, $leitor)
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotalPaginas($totalPaginas);
        $this->setPaginaAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }

    //Métodos
    public function detalhes()
    {
        echo "<p>O livro " . $this->getTitulo() . " do autor " . $this->getAutor() . " tem um total de " . $this->getTotalPaginas() . " páginas e está sendo lido pelo leitor(a)  " . $this->getLeitor()->getNome() . " que está lendo a página " . $this->getPaginaAtual() . " do livro.</p>";
    }

    // Métodos de interface
    public function abrir()
    {
        if ($this->getAberto()) {
            echo "<p>O livro já está aberto!</p>";
        } else {
            $this->setAberto(true);
        }
    }

    public function fechar()
    {
        if (!$this->getAberto()) {
            echo "<p>O livro já está fechado!</p>";
        } else {
            $this->setAberto(false);
        }
    }

    public function folhear($paginaFolhada)
    {
        if ($this->getAberto()) {
            if ($paginaFolhada > $this->getTotalPaginas() || $paginaFolhada < $this->getTotalPaginas()) {
                echo "<p>Você digitou um valor inválido para folhear!</p>";
            } else {
                $this->setPaginaAtual($paginaFolhada);
            }
        } else {
            echo "<p>O livro está fechado! Não é possível folhear.</p>";
        }
    }

    public function avancarPagina()
    {
        if ($this->getAberto()) {
            if ($this->getPaginaAtual() == $this->getTotalPaginas()) {
                echo "<p>Você chegou ao fim do livro!</p>";
            } else {
                $this->setPaginaAtual($this->getPaginaAtual() + 1);
            }
        } else {
            echo "<p>O livro está fechado! Não é possivel avançar.</p>";
        }
    }

    public function voltarPagina()
    {
        if ($this->getAberto()) {
            if ($this->getPaginaAtual() == 0) {
                echo "<p>Você está na primeira página do livro!</p>";
            } else {
                $this->setPaginaAtual($this->getPaginaAtual() - 1);
            }
        } else {
            echo "<p>O livro está fechado! Não é possível voltar.</p>";
        }
    }
}
