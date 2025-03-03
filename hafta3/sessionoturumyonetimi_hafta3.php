<?php
/*session_start();
$_SESSION["mesaj"]="Gelişim Üniversitesine Hoşgeldiniz";
echo $_SESSION["mesaj"];
*/

$_SESSION["dizi"]=array(
    "kullanici_id"=>123,
    "kullanici_adi"=>"Gelişim Üniversitesi",
    "kullanici_mail"=>"aysimosyildiz@gmail.com",
    "kullanici_telefon"=>"05340521765"
);
echo $_SESSION["dizi"]["kullanici_mail"]."<br>"; //dizilerden kullanıcı maili yazdır.
print_r($_SESSION["dizi"]); //print_r dizinin komple gözükmesini sağlar.



?>