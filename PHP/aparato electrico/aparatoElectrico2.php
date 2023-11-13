<?php
include ("aparatoElectrico.php");
$bombilla=new AparatoElectrico(150);
$plancha=new AparatoElectrico(2000);
$bombilla->encender(false);
echo "El consumo total hasta ahora es : " .$plancha->encender(false);
$bombilla->apagar(true);
$plancha->apagar(true);
?>