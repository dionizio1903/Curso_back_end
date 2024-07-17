<?php 

$dia = readline("digite o dia ");

$msg = match ($dia) {
    'segunda','quarta','sexta'  => 'hoje e dia de aula',
    'terca','quinta' =>'nao e dia de aula' ,
    default => 'hoje e finalde semana'
};
  
echo $msg;