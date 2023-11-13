<!DOCTYPE html >
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio diapositiva 21</title>
</head>
<body>

<?php

$n1=$_POST['nota1'];
$n2=$_POST['nota2'];
$n3=$_POST['nota3'];

$media=($n1+$n2+$n3)/3;

function recogerDatos1(){

    echo "El alumno es: ".$_POST['nombre']." ".$_POST['apellido1']." ".$_POST['apellido2'];  
    echo "</br>";
    echo "Su nota media es de: ".$GLOBALS['media'];
    echo "</br>";

}

function recogerDatos2($nombre,$apellido1,$apellido2){

    echo "El alumno es: ".$nombre." ".$apellido1." ".$apellido2;  
    echo "</br>";
    echo "Su nota media es de: ".$GLOBALS['media'];
    echo "</br>";

}

function recogerDatos3(){
    
    $nombre = $_POST['nombre'];
    $ape1 = $_POST['apellido1'];
    $ap2 = $_POST['apellido2'];
    $media =$GLOBALS['media'];

    $frase ="El alumno es: ".$nombre." ".$ape1." ".$ap2." tiene una media de ".$media;

    return $frase;

}

function recogerDatos4($nombre,$apellido1,$apellido2){

    $media =$GLOBALS['media'];

    $frase2 ="El alumno es: ".$nombre." ".$apellido1." ".$apellido2." tiene una media de ".$media;

    return $frase2;
}

recogerDatos1();

recogerDatos2($_POST['nombre'],$_POST['apellido1'],$_POST['apellido2']);

$frase=recogerDatos3();
echo $frase;
echo "</br>";

$frase2=recogerDatos4($_POST['nombre'],$_POST['apellido1'],$_POST['apellido2']);
echo $frase2;

?>
</body>
</html>