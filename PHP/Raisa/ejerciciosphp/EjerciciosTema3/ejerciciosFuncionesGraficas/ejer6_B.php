<?php
session_start(); //abrir la sesión

$ancho = 200;
$alto = 50;

$imagen=imageCreate($ancho,$alto);
$amarillo=ImageColorAllocate($imagen,255,255,0); 
ImageFill($imagen,0,0,$amarillo); 

$verde=ImageColorAllocate($imagen,0,255,0);
$valoraleatorio= rand(0,1000);      //genera números aleatorios
$_SESSION['numeroaleatorio']=$valoraleatorio;   //Se añade el numero al array de la sesion                  
ImageString($imagen,5,50,20,$valoraleatorio,$verde); //tamaño de la fuente máx.5 y coordenadas c y f

for($var1=0; $var1<4; $var1++){

    $x1 = rand(0,$ancho);    
    $y1 = rand(0,$alto);
    $x2 = rand(0,$ancho);
    $y2 = rand(0,$alto);

    imageline ($imagen, $x1, $y1, $x2, $y2, $verde);
}

header ("content-type: image/jpeg"); 
imageJPEG ($imagen); 
imageDestroy($imagen); 
                      
?>