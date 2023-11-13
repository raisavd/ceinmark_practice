<?php
class Productos{

private $pro;

public function __construct(){
    $this->pro=array(); 
    $this->tienda=array();  
    
}

public function get_Productos(){

    $sql = "select distinct p.cod, p.nombre_corto from stock s, producto p where s.producto = p.cod";
    $stock = mysqli_query(Conectar::conexion(),$sql);
  
    while($filas = mysqli_fetch_assoc($stock)){         
        $this->pro[]=$filas;
    }
    
    Conectar::cerrarConexion(Conectar::conexion());
       
    return $this->pro;           
}

public function get_Tiendas($p){
    
    $sql2 = "select t.nombre, s.unidades from stock s, tienda t where s.tienda = t.cod and s.producto = '$p'";
    $t = mysqli_query(Conectar::conexion(),$sql2);
  
    while($filas = mysqli_fetch_assoc($t)){         
        $this->tienda[]=$filas;
    }
    var_dump($this->tienda);
    Conectar::cerrarConexion(Conectar::conexion());
       
    return $this->tienda;

}

}

?>