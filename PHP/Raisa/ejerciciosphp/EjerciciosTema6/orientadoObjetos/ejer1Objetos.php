<?php
    require_once('ejer1Plantilla.php');
    $per1=new Persona('Jon','Bizkaia',1500.60);
    $per1->visualizar();
    $per2=new Persona('Ane','Bizkaia',1700.32);
    $per2->visualizar();
    $per2->sueldoMasComision();
?>