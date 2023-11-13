<?php

class Vista{

    public function visualizar($pro,$tienda){

        $p = $_POST['productos'];

        echo "<H1>Listado de stock del articulo seleccionado</H1>";
        echo "<br />";
        echo "<hr />";
        echo '<form method="POST" action="">';
        echo "Producto: ";
        echo ' <select name="productos"> ';
    
        foreach ($pro as $op){
                                           
            if($p == $op['cod']){
                
                echo " <option selected=\"selected\" value=".$op['cod'].">".$op['nombre_corto']."</option> ";                
            }else{
                echo " <option value=".$op['cod'].">".$op['nombre_corto']."</option> "; 
            }           
        }            
    
        echo ' <input type="submit"  name="submit" value="Mostrar stock"/><br /><br />';
    
        if(isset($_POST['submit'])){
        
            foreach ($tienda as $ti){
                echo "Tienda ".$ti['nombre'].": ".$ti['unidades']." unidades <br/>";
            }
        }
        echo "</form>"; 
        
        return $p;
    }
}
?>