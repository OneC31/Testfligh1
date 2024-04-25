<?php

    class Saiyajin{

        public string $nombre;
        public int $nivel_pelea;


        public function __construct($nombre,$nivel_pelea)
        {
            $this->nombre= $nombre;
            $this->nombre= $nivel_pelea;
            echo "Metodo constructor";
             
        }


        public function Saludar(){
            return "Hola soy ".$this->nombre;
        }

        public function NivelDePelea(){
            return $this-> nombre."tiene un nivel de pelea de". 
            $this->nivel_pelea;

        }
    }

    $goku = new Saiyajin("goku",1000);
    #var_dump($goku);
    echo $goku->Saludar();

    $vegueta= new Saiyajin("Vegueta",950);
