<?php 
/*faca um programa que receba um numero digitado pelo usuario e calcule a soma de todos os numeros de 1 ate ao numero digitado por exemplo se o usuariodigitou o numero 4 a saida deve ser "1+2+3+4=10" */

$num = readline("Digite um numero: ");

$res = 0;

for ( $i=0;$i<=$num  ; $i++) { 
    $res +=  $i  ;
    $sinal = ' +';
   
 echo substr($sinal,0, $sinal)." ".$i ;
    
}

echo "= $res";
