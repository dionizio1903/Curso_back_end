<?php 

class Conta{
    public $saldo = 0;
    public $titular;

    function depositar($valor){
        $this->saldo+=$valor;
    }

    function sacar($valor){
        if ($this->saldo > 0 && $this->saldo >= $valor)  {
            $this->saldo-=$valor;
        }
        else {
            echo "saldo insuficiente";
        }
         
    }

    function verSaldo(){
        echo "saldo Atual: R$".$this->saldo.'<br>';
    }

}

$cc = new Conta();

$cc->depositar(100);
$cc->sacar(150);
$cc->verSaldo();

