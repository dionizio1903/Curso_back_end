<?php 

/*Faça um programa que leia 4 notas de um aluno. Em seguida
ele deve calcular a média do aluno e dar o seguinte resultado:
&quot;Aprovado&quot;, se a média for maior ou igual a seis; “Reprovado”,
se a média for menor que quatro; “Recuperação”, se estiver
entre quatro e seis; &quot;Aprovado com Distinção&quot;, se a média for
igual ou maior que nove.*/

$n1 = readline("digite  nota 1: ");
$n2 = readline("digite  nota 2: ");
$n3 = readline("digite  nota 3: ");
$n4 = readline("digite  nota 4: ");

$media = ($n1 + $n2 + $n3 + $n4)/4;

 if($media >= 6){
    echo "aprovado";
 }
 elseif($media <= 4 ){
    echo "reprovado";
 }
 else{
    echo "recuperação";
}
