<?php
setcookie("cerez","Aysima",time()+(60*60*24*365));
if(isset($_COOKIE["cerez"]))
{
    echo "Çerezin adı: ".$_COOKIE["cerez"];
}
else{
    echo "böyle bir çerez yok";
}
?>