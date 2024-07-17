<?php 
$soma = 0;
$i = 1;
while ($i<=10) {

    $num = readline("Digite numero: ");
    $soma += $num;
    $i++;
}

echo "Soma dos numeros = $soma";