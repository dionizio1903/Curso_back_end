<?php 

//faca um script que leia uma letra e informe se e vogal ou consoante deve se considerar se e maiuscula ou minuscula

$letra = ctype_lower(readline("digite a letra: "));



if($letra=='a' || $letra=='e' || $letra=='i' || $letra=='o' || $letra=='u ' ){
    echo "letra e vogal\n";
}
else{
    echo "letra e consoante\n";
} 
//if(ctype_lower($letra) ){
  //  echo "letra minuscula\n";
//}
//else{
  //  echo "letra maiuscula";
//} 