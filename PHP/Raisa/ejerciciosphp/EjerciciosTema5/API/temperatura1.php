<?php

$api="api.openweathermap.org/data/2.5/weather";
$urlContenido = file_get_contents("https://$api?q=".($_POST['ciudad']). "&appid=489ec0786e32444dc668c8393c59dd5e&lang=es");
$array = json_decode($urlContenido,true);//Permite convertir un String de  JSON en un array asociativo
//var_dump($array);

$descripcion = $array['weather'][0]['description'];
$temperatura = $array['main']['temp'];
$temperaturaMin = $array['main']['temp_min'];
$temperaturaMax = $array['main']['temp_max'];

$temperatura = (int) $temperatura - 273;
$temperaturaMin = (int) $temperaturaMin - 273;
$temperaturaMax = (int) $temperaturaMax - 273;

echo "El tiempo en ".$_POST['ciudad']." es actualmente ".$descripcion;
echo "<br/>";
echo "La temperatura es de ".$temperatura."º oscilando ente ".$temperaturaMin."º de minima y ".$temperaturaMax."º de maxima";
?>