<?php

class Conectar{

    public static function conexion(){

        @$conexion = new mysqli('localhost', 'root', '', 'dwes');

        $error = $conexion->connect_errno;

        if ($error == null) {

            return $conexion;
            
        }else{
            print "No se ha podido conectar a la base de datos";
        }
    }

    public static function cerrarConexion($conexion){
        $conexion->close();
    }
}
?>