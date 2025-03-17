<?php
//anahtar değerleri olmayan diziyi json dizisine çevirme

$diller=array("PHP","C#","Java");
$json_dizisi=json_encode($diller);
echo $json_dizisi."<br>";

//anahtar değerleri olan bir diziyi json dizisi haline çevirme
$ArabaMarkasi=array(
    "araba1"=>"mercedes",
    "araba2"=>"Bmw",
    "araba3"=>"Volvo"

);
$json_nesnesi=json_encode($ArabaMarkasi);
echo $json_nesnesi."<br>";
 ?>