<?php
session_start();
if($_SESSION["kullaniciadi"]=="admin" && 
$_SESSION["kullanicisifre"]==123456)
{
    echo "<h3> bu sayfa size özel bir sayfadır oturumunuz başarıyla gerçekleştiği için bu sayfaya yönlendirildiniz. </h3>"."<br>"."<a href='indexx.php'>Anasayfa</a> | <a href='cikis.php'>çıkış yap </a>";
}
else
{
    header("Location:giris.php");
}
?>