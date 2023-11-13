<?php

$cadena = "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito";

$vocales = ['a','á'];

$resul = str_replace($vocales, "*", $cadena);

echo $resul;

?>