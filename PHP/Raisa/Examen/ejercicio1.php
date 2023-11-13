<?php

$dni = "100A";
$provincia = "Bizkaia";

function metodo($dni, $provincia, $informe = "Archivado"){
    $GLOBALS['provincia'] = "Araba";
    echo "La persona con dni: ".$dni." vive en la provincia: ".$provincia." ".$informe."<br/>";
    $provincia = "Madrid";
}

metodo($dni, $provincia);
metodo($dni, $provincia);
$provincia = "Barcelona";
metodo($dni, $provincia, "No localizado");
echo "La persona con dni: ".$dni." vive en la provincia: ".$provincia."<br/>";
echo "La persona con dni: ".$dni." vive en la provincia: ".$GLOBALS['provincia']."<br/>";

?>