<?php

$cadena = "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito";

$pos = strpos($cadena, 'averiguar');

$resul = substr($cadena,$pos);

echo $resul;

?>