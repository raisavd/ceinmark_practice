<?php
$calle="Iturribide";
$centro="Ceinmark";
$frase1=<<<comillasDobles
La calle dónde "estudio" se llama $calle 
comillasDobles;
$separacion=<<<separacion
**
separacion;
$frase2=<<<'comillasSimples'
Aquí uso sintaxis nowdoc <br> 
La calle dónde "estudio" se llama:
comillasSimples;




echo $frase1.'<br>';
echo $separacion.'<br>';
echo $frase2.$calle.'<br>';

echo<<<datosColegio
Estudio en el centro $centro, que se sitúa en la calle $calle.
datosColegio;
?>