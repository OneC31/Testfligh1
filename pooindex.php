<?php require_once "saiyajin.php";


$goku = new Saiyajin("goku",1000);
$vegueta= new Saiyajin("Vegueta",950);

echo $goku->NivelDePelea();
echo "<br>";
echo $vegueta->Saludar();