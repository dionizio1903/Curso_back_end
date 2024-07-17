<?php 

$num1 = readline("digite um numero: ");
$num2 = readline("digite um numero: ");

$operacao = readline("escolhar a operação: ");

function somar() {
    global $num1,$num2;
    return $num1+$num2;

}

function subtrair() {
    global $num1,$num2;
    return $num1-$num2;
    
}

if ($operacao==1 ) {
    echo somar();
}elseif($operacao==2){
    echo subtrair();
}else{
    echo "operação invalida";
}