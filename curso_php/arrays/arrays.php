<?php

$nome = [
    'joao','maria','jose'
];

//$nome = array('joao','maria','jose');

//echo $nome [0];

//echo '<br>'. $nome[2];

#criar arrays com chaves

$nomes = [
    10=>'joao',
    20=>'maria',
    30 => ' jose'
];

//echo $nomes[20];

//$familia = [
  //  'pai'=> 'edson',
    //'mae' => ' lurdes',
    //'filho' => ' tiburcio'
//];

//echo $familia ['filho'];

//echo '<prev>';

//print_r($nomes);

//echo '<prev>';
 //inclui elemento no final do array
array_push($nomes, 'pedro');

// retirar elemento do array com a posição
unset ($nomes[2]);

print_r($nomes);

