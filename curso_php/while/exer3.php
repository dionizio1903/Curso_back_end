<?php 

$soma = 0;
$i = 1;
while ($i<=10) {
    $num = readline("Digite numero: ");
if ($num<=40) {
    $soma += $num;
}
    
    
    $i++;
}

echo "Soma dos numeros = $soma";