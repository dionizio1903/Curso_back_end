<?php 

//faca um algoritmo que leia o preco de um produto e mostre seu novo preco com 5% de desconto

$preco = readline("preço do produto: R$ ");

$preconovo = $preco - ($preco*0.05);

echo "Valor do produto: R$ $preco\nValor com desconto: R$ $preconovo";