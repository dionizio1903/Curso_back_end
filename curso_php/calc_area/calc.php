<?php
class Retangulo{
private $base;
private $altura;
public function setBase($novaBase){
$this->base=$novaBase;
}
public function getBase(){
return $this->base;
}
public function setAltura($novaAltura){
$this->altura = $novaAltura;
}
public function getAltura(){
return $this->altura;
}
public function calcularArea(){
return ($this->altura*$this->base);
}
public function calcularDiagonal(){
return sqrt(pow($this->altura,2) + pow($this->base,2));
}
public function calcularPerimetro(){
return ($this->altura*2 +$this->base*2) ;
}
}
