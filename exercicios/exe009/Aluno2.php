<?php
require_once "Pessoa2.php";
// Herança para Diferença
class Aluno2 extends Pessoa2
{
    private $matricula;

    private $curso;

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

    public function pagarMensalidade(){
        echo "<p>Pagando mensalidade do aluno ".$this->getNome() ."!</p>";
    }

}
