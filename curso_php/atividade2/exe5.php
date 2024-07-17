<?php 

/*Desenvolva um script que leia um número e exiba o dia
correspondente da semana. (1-Domingo, 2- Segunda, etc.), se
digitar outro valor deve aparecer valor inválido.​ */

$dia = readline("Digite o número do dia da semana: ");

if ($dia == 1){
    echo "domingo";
}
elseif ($dia == 2){
    echo "segunda";
}
elseif ($dia == 3){
    echo "terça";
}
elseif ($dia == 4){
    echo "quarta";
}
elseif ($dia == 5){
    echo "quinta";
}
elseif ($dia == 6){
    echo "sexta";
}
elseif ($dia == 7){
    echo "sabado";
}
else{
    echo "numero invalido";
}