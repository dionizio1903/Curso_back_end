<?php 

/*
 faca um programa que leia um valor interio e mostre a tabuada de 1 a 10 do valor lido 
 */
 
 $num = readline("Digite a tabuada: ");

 $valores = [1,2,3,4,5,6,7,8,9,10];

for ($i=0,$total_valores = count($valores); $i < 11 ; $i++) { 
  $res *= $valores [$i] ;
    
}

echo $res;