<?php
require_once "Lutador.php";
class Luta
{
     private  $desafiado;
     private  $desafiante;
     private $rounds;
     private $aprovada;

     //Métodos Especiais

     public function getDesafiado()
     {
          return $this->desafiado;
     }

     public function setDesafiado($desafiado): self
     {
          $this->desafiado = $desafiado;
          return $this;
     }

     public function getDesafiante()
     {
          return $this->desafiante;
     }

     public function setDesafiante($desafiante): self
     {
          $this->desafiante = $desafiante;
          return $this;
     }

     public function getRounds()
     {
          return $this->rounds;
     }

     public function setRounds($rounds): self
     {
          $this->rounds = $rounds;
          return $this;
     }

     public function getAprovada()
     {
          return $this->aprovada;
     }

     public function setAprovada($aprovada): self
     {
          $this->aprovada = $aprovada;
          return $this;
     }

     //Método
     public function marcarLuta($lutador1, $lutador2)
     {
          if ($lutador1->getCategoria() == $lutador2->getCategoria() && $lutador1 != $lutador2) {
               $this->setAprovada(true);
               $this->setDesafiado($lutador1);
               $this->setDesafiante($lutador2);
               echo "<p>Luta marcada!</p>";
          } else {
               $this->setAprovada(false);
               $this->setDesafiado(null);
               $this->setDesafiante(null);
               echo "<p>Luta não marcada!</p>";
          }
     }

     public function lutar()
     {
          if ($this->getAprovada()) {
               $this->desafiado->status();
               $this->desafiante->status();
               $vencedor = mt_rand(0, 2);
               switch ($vencedor) {
                    case 0: //Empate
                         echo "<p>Empatou!</p>";
                         $this->getDesafiado()->empatarLuta();
                         $this->getDesafiante()->empatarLuta();
                         break;

                    case 1: //Ganhou Desafiado
                         echo "<p>" . $this->getDesafiado()->getNome() . " ganhou!</p>";
                         $this->getDesafiado()->ganharLuta();
                         $this->getDesafiante()->perderLuta();
                         break;

                    case 2: //Ganhou Desafiante
                         echo "<p>" . $this->getDesafiante()->getNome() . " ganhou!</p>";
                         $this->getDesafiado()->perderLuta();
                         $this->getDesafiante()->ganharLuta();
                         break;
               }
          } else {
               echo "<p>Luta não pode acontecer!</p>";
          }
     }
}
