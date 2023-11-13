<?php

class Conectar{

    public static function conexion(){

        $conexion=mysqli_connect("localhost","root","", "estudiantes") or die("Error en la conexion");      
        
        return $conexion;
    }

     
    public static function cerrarConexion($conexion){

        return mysqli_close($conexion);
    }
}

?>