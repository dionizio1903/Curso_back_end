<?php 

class Conta{
    public $saldo = 1000.00;
    public function depositar(){

    }
    function sacar(){

    }

}

class ContaCorrente extends Conta{
    function trasferir($valor){
        $this->saldo-=$valor;
    }
}

$cc= new ContaCorrente();
$cc->trasferir( 250);

echo "titular: {$css->titular}<br>
saldo: {$css->saldo}";