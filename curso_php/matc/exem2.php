<?php 

$valor = readline("digite um numero: ");

$resultado = match (true) {
     $valor>100 => "valor e maior que 100",
     $valor<100 => "valor menor que 100",
     default => "valor igual a 100"
};

echo $resultado;