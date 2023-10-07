<?php
require_once "Pessoa1.php";
class Aluno extends Pessoa1
{
    private $matricula;
    private $curso;
 
	// Métodos Especiais
	public function getMatricula() {
		return $this->matricula;
	}
	
	public function setMatricula($matricula): self {
		$this->matricula = $matricula;
		return $this;
	}

	public function getCurso() {
		return $this->curso;
	}

	public function setCurso($curso): self {
		$this->curso = $curso;
		return $this;
	}

   public function __construct() {
    $this->setMatricula(true);
   }

   //Metodos

   public function cancelarMatricula(){
    if($this->getMatricula()){
        echo "<p>Matrícula será cancelada!</p>";
		$this->setMatricula(false);
    }else{
        echo "<p>Não está matriculado!</p>";
    }
   }
}
