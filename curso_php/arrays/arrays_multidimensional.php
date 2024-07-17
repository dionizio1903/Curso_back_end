<?php

$lojas = [
    'loja1' => [
    'telefone' => '9999-7777',
    'email'=> ' loja1@gmail.com'
    ],

    'loja2' => [
    'telefone' => '9999-8888',
    'email'=> ' loja2@gmail.com'
    ],

    'loja3' => [
    'telefone' => '9999-9999',
    'email'=> ' loja3@gmail.com'
    ],
    
];

echo'<prev>';
print_r($lojas);
echo '<prev>';

echo $lojas ['loja1']['email'];

$carros = array (
    array('cadillac',10,4),
    array('bmw',20,12),
    array('volvo',30,24)
);

echo $carros [0][0]."estoque:".$carros [0][1]."vendidos:".$carros[0][2];


