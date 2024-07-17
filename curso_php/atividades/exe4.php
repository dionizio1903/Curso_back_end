<?php 

//faca um programa que leia um numero inteiro e mostre na tela o seu sucesso e seu antecessor
define('SU', 1);

$a = readline("digite o numero: ");
$b = readline("digite o numero: ");
$soma = $a+$b;
$su = $soma + SU;
$an = $soma - SU;

echo "Atual:  $soma \nSucessor: $su\nAntecessor: $an";