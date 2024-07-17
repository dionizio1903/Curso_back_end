<?php 
// faca um scrip que pergute o horario e imprima a mensagem bom dia boa tarde ou boa noite

$horas = readline("qual e a horas: ");

if (($horas > "00:00:00") && ($horas < "11:59:59")){
 echo "Bom dia!";
}
elseif (($horas > "12:00:00") && ($horas < "17:59:59")){
    echo "Boa tarde!";
   }
   elseif (($horas > "18:00:00") && ($horas < "23:59:59")){
    echo "Boa noite!";
}   
else{
    echo "horario errado";
}


