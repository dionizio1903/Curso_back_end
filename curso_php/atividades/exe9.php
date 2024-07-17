<?php 

//faca um algoritmo que leia o salario de um funcionario e mostre seu novo salario com 15% de aumento

$salario = readline("informe o salário: R$ ");
$aumento = $salario + ($salario*0.15);


echo "salario do funcionario: R$\n".number_format(round($salario,2), 2, '.', ''). "salario com aumento: R$".number_format(round($aumento,2), 2, '.', '');