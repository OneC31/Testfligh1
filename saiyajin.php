<?php

class Saiyajin
{


    public string $nombre;
    public int $nivel_pelea;
    public $ropas;


    public function __construct($nombre, $nivel_pelea, $bikini)
    {
        $this->nombre = $nombre;
        $this->nivel_pelea = $nivel_pelea;
        $this->ropas = $bikini;
        echo "<br>";
        //echo "Metodo constructor";  
    }
    public string $clase = "Saiyajin";

    public function Saludar($texto = "holis soy")
    {
        return $texto . $this->nombre;
    }

    public function NivelDePelea()
    {
        return $this->nombre . " tiene un nivel de pelea de" .
            $this->nivel_pelea . "y pertenece a la clase" . $this->clase;
    }
    public function ColorRopas()
    {
        return $this->nombre . "tiene ropa de color" .
            $this->ropas;
    }
}

class SuperSaiyajin extends Saiyajin
{

    public string $clase = "Super Saiyajin";
    public function Transformacion()
    {


        if ($this->nivel_pelea >= 1500) {
            $texto = $this->nombre . "se transformo en" . $this->clase;
        } else {
            $texto = $this->nombre . "No se transformo en " . $this->clase;
        }
        return $texto;
    }
}
$goku = new Saiyajin("goku", 1000, "naranja");
$vegueta = new Saiyajin("Vegueta", 950, "Azul");
/*
    echo $vegueta->Saludar();
    echo "<br>";
    echo $goku->NivelDePelea();
    echo "<br>";
    echo $vegueta->ColorRopas(); */


$gohan = new SuperSaiyajin(nivel_pelea: 1600, nombre: "Gohan", bikini: "moradas");

#echo $gohan->NivelDePelea();
echo $gohan->Transformacion();
