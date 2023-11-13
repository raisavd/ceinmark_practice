<?php

class Estudiantes{

    private $est;

    public function __construct(){
        $this->est=array();   
        
    }

    public function get_estudiante(){

        $sql="select * from estudiantes";
        $res=mysqli_query(Conectar::conexion(),$sql);
        while($reg = mysqli_fetch_assoc($res)){
        
            $this->est[]=$reg;    
        }

        Conectar::cerrarConexion(Conectar::conexion());

        return $this->est;           
    }
}
?>