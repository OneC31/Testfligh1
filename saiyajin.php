<?php

    class Saiyajin{

        public string $nombre;
        public int $nivel_pelea;


        public function __construct($nombre,$nivel_pelea)
        {
            $this->nombre= $nombre;
            $this->nivel_pelea= $nivel_pelea;
            echo "<br>";
            //echo "Metodo constructor";
             
        }

        public function Saludar($texto="holis soy"){
            return $texto.$this->nombre;
        }

        public function NivelDePelea(){
            return $this-> nombre." tiene un nivel de pelea de". 
            $this->nivel_pelea;

        }
    }

   

    #$vegueta= new Saiyajin("Vegueta",950);
    #echo $vegueta->NivelDePelea();