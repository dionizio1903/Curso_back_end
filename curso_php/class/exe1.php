<?php 

class Fruta{ //esta e a class
     
    public $nome;
}
  
$laranja = new Fruta(); // este e o objeto
$laranja->nome = "laranja pera";

echo $laranja->nome.'<br>';


###################################################
class Fruta2{
    
    public $nome;    
    public $cor;
    public $peso;

    public function apresentar() {
        return 
        "Nome: {$this->nome} <br> 
        cor: {$this->cor}  <br>
        peso: {$this->peso}gr";
    }
}

$maca = new Fruta2();
$maca->nome ="maçã Argentina";
$maca->cor ="vermelho";
$maca->peso = 100;

echo $maca->apresentar();