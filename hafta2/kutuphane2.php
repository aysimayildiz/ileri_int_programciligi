<?php
$db=new PDO("mysql:host=localhost; dbname=durumm; charset=utf8","root","");
if(isset($_POST["ekle"]))
{
$kcilt=$_POST["cilt_no"];
$kyazar=$_POST["yazar_adi"];
$kyayinevi=$_POST["yayinevi"];

if($db)
{
 echo "veritabanı bağlantısı gerçekleşti."."<br>";
}
 $ekle=$db->exec("INSERT INTO durumm (cilt_no,yazar_adi,yayinevi) VALUES('$kcilt','$kyazar','$kyayinevi')");
 if($ekle)
 {
 echo "kayit ekleme başarılı";
 }
 else
{
 echo" kayıt ekleme başarısız";
 }
}
?>