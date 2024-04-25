<?php

    class Saiyajin{

        public string $nombre;
        public int $nivel_pelea;


        public function __construct()
        {
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

    $goku = new Saiyajin();
    #var_dump($goku);
    echo $goku->Saludar();

    $vegueta= new Saiyajin();
