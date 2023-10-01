<?php

class ContaBanco
{
    public $numeroConta;
    protected $donoDaConta;
    private $tipoDaConta;
    private $saldo;

    private $statusDaConta;

    public function __construct()
    {
        $this->saldo = 0;
        $this->statusDaConta = false;
    }

    public function criarConta($numeroConta, $nomeDono, $tipoDaConta, $dinheiroInserido = 0)
    {
        // Corrente ou Poupança
        if ($tipoDaConta != "Corrente" && $tipoDaConta != "Poupança") {
            echo "Tipo de conta inválido, selecione <strong>Corrente</strong> ou <strong>Poupança</strong>.<br>";
        } else {
            if ($tipoDaConta == "Corrente") {
                $this->saldo = $dinheiroInserido + 50;
            }
            if ($tipoDaConta == "Poupança") {
                $this->saldo = $dinheiroInserido + 150;
            }
            $this->tipoDaConta = $tipoDaConta;
            $this->numeroConta = $numeroConta;
            $this->donoDaConta = $nomeDono;
            $this->statusDaConta = true;
        }
    }

    public function getNumeroDaConta()
    {
        return $this->numeroConta;
    }

    public function setNumeroDaConta($numeroDaConta)
    {
        return $this->numeroConta = $numeroDaConta;
    }

    public function getTipoDaConta()
    {
        return $this->tipoDaConta;
    }

    public function setTipoDaConta($tipoDaConta)
    {
        return $this->tipoDaConta = $tipoDaConta;
    }

    public function getDonoDaConta()
    {
        return $this->donoDaConta;
    }

    public function setDonoDaConta($donoDaConta)
    {
        return $this->donoDaConta = $donoDaConta;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo($saldo)
    {
        return $this->saldo = $saldo;
    }

    public function sacarValor($valorSacado, $pedirDinheiro = false)
    {
        if ($this->statusDaConta) {
            if ($valorSacado <= $this->saldo) {
                $this->saldo -= $valorSacado;
            } else {
                if (!$pedirDinheiro) {
                    echo "Saldo Insuficiente!<br>";
                } else {
                    echo $this->getDonoDaConta() . " decidiu ultrapassar seu limite e está devendo para o banco!<br>";
                    $this->saldo -= $valorSacado;
                }
            }
        } else {
            echo "Não é possíve sacar. Conta não existe!<br>";
        }
    }

    public function depositarValor($valorDepositado)
    {
        if ($this->statusDaConta) {
            $this->saldo += $valorDepositado;
        } else {
            echo "Não é possíve depositar. Conta não existe!<br>";
        }
    }

    public function pagarMensalidade($isPago)
    {
        if ($this->statusDaConta) {
            if ($this->tipoDaConta == "Corrente") {
                $valorMensalidade = 12;
            } else {
                $valorMensalidade = 20;
            }
            if ($isPago == true && $this->saldo > $valorMensalidade) {
                echo "Você pagou a mensalidade de R$$valorMensalidade;<br>";
                $this->saldo -= 50;
            } else if ($isPago == true && $this->saldo < $valorMensalidade) {
                echo "Saldo insuficiente para pagar a mensalidade! Sua conta foi fechada.<br>";
                $this->resetarConta();
            } else {
                echo "Você decidiu não pagar a mensalidade! Sua conta foi fechada.<br>";
                $this->resetarConta();
            }
        }
    }

    private function resetarConta()
    {
        $this->numeroConta = "";
        $this->donoDaConta = "";
        $this->tipoDaConta = "";
        $this->saldo = 0;
    }

    public function fecharConta($numeroConta)
    {
        if ($this->numeroConta == "") {
            echo "Não é possível fechar uma conta não existente!<br>";
        } else {
            if ($this->saldo > 0) {
                echo "É necessário sacar todo o dinheiro da conta antes de encerrar ela!<br>";
            } else if ($this->saldo < 0) {
                echo "Seu saldo é R$" . $this->saldo . ", pague seu débito para poder encerrar sua conta!<br>";
            } else {
                echo "Conta de número " . $this->numeroConta . " fechado<br>.";
                $this->statusDaConta = false;
                $this->resetarConta();
            }
        }
    }
}
