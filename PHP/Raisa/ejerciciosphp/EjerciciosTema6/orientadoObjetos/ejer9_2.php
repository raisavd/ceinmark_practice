<?php

    require_once('ejer9_1.php');
    $per1=new Persona();
    $per1->setNombre('Jon');
    $per1->setApellidos('Garcia');
    $per1->setGenero('Hombre');

    echo "La persona es ".$per1->getNombre()." ".$per1->getApellidos()." ".$per1->getGenero();    

?>