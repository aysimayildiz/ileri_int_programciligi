<?php
// // yeni txt dokümanı oluşturdu
// touch("webtasarimi.txt");
// // deneme klasörü içerisine dosya oluşturdu.
// touch("deneme/yeni_dosya.txt");

// touch("ogrenci.txt");
// $belge=fopen("ogrenci.txt","w+");
// fwrite($belge,"adım soyadım: AYSİMA YILDIZ, \tOkul: GELİSİM ÜNİVERSİTESİ, \nProgramlama Dilleri:PHP");
// echo"Belge üzerine metin eklendi";
// fclose($belge);

$dosya=fopen("ogrenci.txt",'r');
while(!feof($dosya))
{
    echo fgets($dosya)."<br>";
}
?>