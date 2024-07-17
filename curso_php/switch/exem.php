<?php 

$dia = readline("digite o dia da semana:");

switch ($dia){
    case 1:
        echo "segunda";
        break;

case 2:
    echo "terça";
    break;

case 3:
    echo "quarta";
    break;

case 4:
    echo "quinta";
    break;
case 5:
    echo "sexta";
    break;

case 7:
    echo "sabado";
    break;

default :
 echo "numero invalido";
 break;
}