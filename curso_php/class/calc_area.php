<?php
    $al = $_POST['altura'];
    $la = $_POST['largura'];
  

    class Retangulo{
        public $alt ;
        public $lar;
        public function __construct($alt,$al){
            $this->alt = $alt;
            $this->lar = $la;

         }
         
      
        function calcularArea(){
            return ($this->altura*$this->largura);
        }
        
        function calcularPerimetro(){
            return ($this->altura*2 +$this->largura*2) ;
        }
        }
            
            $q1 = new Retangulo();
             
            
            $result = $q1->calcularArea();
                       