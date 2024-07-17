<?php 
/*
 Faça um programa que leia e valide as seguintes informações:​
Nome: maior que 3 caracteres;​
Idade: entre 0 e 150;​
Salário: maior que zero;​
Sexo: 'f' ou 'm';​
Estado Civil: 'solteiro', 'casado', 'viúvo', 'divorciado';
*/

//Nome: maior que 3 caracteres;​


$nome = readline("Digite nome: ");

while (strlen ($nome) <= 3) {
    
    $nome = readline("Digite nome: ");
    echo "nome invalido \n "  ;
}

// Idade: entre 0 e 150;​

$idade = readline("Digite a idade: ");

while (0 or $idade > 150) {
    echo "idade invalido \n "  ;
    $idade = readline("Digite a idade: ");
}
//Salário: maior que zero;​

$salario = readline("Digite o salario: ");

while ($salario <= 0) {
    echo "salario  invalido \n "  ;
    $salario = readline("Digite o salario: ");
}

// Sexo: 'f' ou 'm';​

$sexo = strtolower(readline("Digite o sexo (F ou M) : "));
while ($sexo != "f" and  $sexo != "m") {
    echo "sexo  invalido \n "  ;
    $sexo =strtolower( readline("Digite o sexo (F ou M) : "));
}

//Estado Civil: 'solteiro', 'casado', 'viúvo', 'divorciado';
 
echo "Estado civil: solteiro, casado, viúvo, divorciado \n";

$es_civil = readline("Digite a inicial do estado civil : ");
while ($es_civil != "solteiro" and  $es_civil != "casado" and $es_civil != "viúvo" and  $es_civil != "divorciado") {
    echo "estado civil  invalido \n "  ;
    $es_civil = readline("Digite a inicial do estado civil : ");
}

  
echo "Nome: $nome\n";
echo "Idade: $idade\n";
echo "Salario: R$ ",number_format($salario,2,",","."),"\n";
echo "Sexo: $sexo\n";
echo "Estado civil: $es_civil\n";