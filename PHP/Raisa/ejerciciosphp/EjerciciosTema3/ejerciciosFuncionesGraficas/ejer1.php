<?php
$imagen=imageCreate(200,50);// se indica el ancho y el alto de la imagen que vamos a crear
                            //la imagen está en memoria
header ("content-type: image/jpeg"); //indicamos el tipo de archivo que recibirá el navegador
imageJPEG ($imagen); // genera la información de la imagen propiamente dicha 
imageDestroy($imagen); //para liberar los recursos ocupados en el servidor
                       // por este proceso de generación de la imagen.
?>
