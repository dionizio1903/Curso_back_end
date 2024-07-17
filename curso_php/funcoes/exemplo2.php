<?php 

//$num1 = 15;
const NUM = 20;
function somar($num2){
    //global $num1;
    $soma = NUM+$num2;
    return $soma;
}

echo somar(3);