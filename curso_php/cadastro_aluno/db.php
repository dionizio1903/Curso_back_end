 

<?php 
// banco de dados


define ('HOST','127.0.0.1');
define ('USER','root');
define ('PASS','');
define ('DB','cadastro');

$conn = new mysqli(HOST, USER, PASS,DB) or die ('não foi possivel conectar');