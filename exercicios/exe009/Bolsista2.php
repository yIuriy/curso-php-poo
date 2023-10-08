<?php require_once "Aluno2.php";
class Bolsista2 extends Aluno2
{
    private $bolsa;

    public function getBolsa()
    {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): self
    {
        $this->bolsa = $bolsa;
        return $this;
    }

    public function renovarBolsa()
    {
        echo "<p>Bolsa do aluno " . $this->getNome() . " renovada!</p>";
    }

    public function pagarMensalidade()
    {
        echo "<p>" . $this->getNome() . " é bolsista. Logo paga com desconto!</p>";
    }
}
