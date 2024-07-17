<?php 

//crie um algaritmo que leia um numero inteiro e mostre o seu dobro o seu triplo e sua rais quadrada

$a = readline("digite o numero: ");

$dobro = $a*2;
$triplo = $a*3;
//$Rq = $a**(1/2);
// raiz quadrada 
$Rq = sqrt($a);

// casas decimal $Rq = number_format($Rq, 2, '.', '');
echo "doblo: $dobro\ntriplo: $triplo\nraiz quadrada: ".round($Rq,2);