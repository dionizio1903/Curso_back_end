<?php 

//desenvolva um programa que leia as tres notas de um aluno, calcule e mostre a  sua media

$n1 = readline("digite a nota 1: ");
$n2 = readline("digite a nota 2: ");
$n3 = readline("digite a nota 3: ");

$media = ($n1 + $n2 + $n3) / 3;
//$media = number_format($media, 2, '.', '');
echo "Media:". round ($media);