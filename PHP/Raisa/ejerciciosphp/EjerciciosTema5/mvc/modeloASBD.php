<?php

function crearConexion($serv, $usu, $contra, $bbdd){    

    return mysqli_connect($serv, $usu, $contra, $bbdd); 
        
}

$con = crearConexion($serv, $usu, $contra, $bbdd);

function crearQuery($con, $sentencia){

    return mysqli_query($con, $sentencia);
   
}

$consulta = crearQuery($con, $sentencia);

function pasarArray($consulta){

    $est=array();
    while ($fila = mysqli_fetch_array($consulta)){
        $est[]=$fila;
        
    }
    return $est;
}

function cerrarConexion($con){

    return mysqli_close($con);
}

?>