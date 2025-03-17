<?php
try{
    $db=new PDO("mysql:host=localhost; dbname=haberlerr;charset=utf8","root","");
}
catch(PDOException $e)
{
    print $e->getMessage();
}
$sorgu=$db->query("SELECT * FROM haber_detayy", PDO::FETCH_ASSOC);
$sonuc=$sorgu->fetchAll(PDO::FETCH_ASSOC);
$json_veri=json_encode($sonuc,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents('haberlerr.json',$json_veri);

?>