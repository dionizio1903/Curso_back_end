<?php

   $alt = $_POST['altura'];
   $lar = $_POST['largura'];

   class Retangulo{
      public $alt;
      public $lar;

      public function __construct($alt,$lar){
         $this->alt = $alt;
         $this->lar = $lar;
      }

      public function calc_Area(){
         return ($this->alt*$this->lar);
      }

      public function calc_perimetro(){
         return 2 * ($this->alt + $this->lar); 
      }
   }

   $q1 = new Retangulo($alt,$lar);
   $resultado = $q1->calc_Area();
   $res = $q1->calc_perimetro();
   echo $resultado . '<br>';
   echo $res;