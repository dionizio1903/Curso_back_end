<?php 

/*Desenvolva um script que leia 2 números e pergunte ao
usuário qual operação ele deseja realizar (adição, subtração,
divisão ou multiplicação). O programa deve mostrar o
resultado, informando se ele é par ou ímpar e positivo ou
negativo. */

$num1 = readline("Digite o número 1: ");
$num1 = readline("Digite o número 2: ");
$ope  =  readline("Digite a operação que deseja realizar: ");


if ($ope == 'adição'){
    $res_ope = $num1 + $num2;
    echo "Resultado: $res_ope";
}
elseif($ope == 'subtração'){
    $res_ope = $num1 - $num2;
    echo "Resultado: $res_ope";
}    
elseif($ope == 'divisão'){
    $res_ope = $num1 / $num2;
    echo "Resultado: $res_ope";
}  

elseif($ope == 'multiplicação'){
    $res_ope = $num1 * $num2;
    echo "Resultado: $res_ope";
}

else{
    echo "Valor Invalido" ;
}

