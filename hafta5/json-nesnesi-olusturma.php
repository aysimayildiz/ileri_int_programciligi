<?php
$json_ben=
'
{
"isim":"Aysima",
"soyisim":"Yıldız",
"memleket":"Sivas"
}
';
$veri=json_decode($json_ben);
echo $veri->isim."<br>". 
$veri->soyisim."<br>". 
$veri->memleket;
?>