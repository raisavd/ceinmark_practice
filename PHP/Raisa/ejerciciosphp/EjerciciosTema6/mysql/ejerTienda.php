<?php

    @$conexion = new mysqli('localhost', 'root', '', 'dwes');

    $error = $conexion->connect_errno;
    
    $sql = "select distinct p.cod, p.nombre_corto from stock s, producto p where s.producto = p.cod";
    $stock = mysqli_query($conexion,$sql);

    while($filas = mysqli_fetch_assoc($stock)){         
        $pro[]=$filas;
    }

    echo "<H1>Listado de stock del articulo seleccionado</H1>";
    echo "<br />";
    echo "<hr />";
    echo '<form method="POST" action="">';
    echo "Producto: ";
    echo ' <select name="productos"> ';

    foreach ($pro as $op){
                                       
        if($_POST['productos'] == $op['cod']){
            
            echo " <option selected=\"selected\" value=".$op['cod'].">".$op['nombre_corto']."</option> ";                
        }else{
            echo " <option value=".$op['cod'].">".$op['nombre_corto']."</option> "; 
        }           
    }            

    echo ' <input type="submit"  name="submit" value="Mostrar stock"/><br /><br />';

    if(isset($_POST['submit'])){

        $p =  $_POST['productos'];
        $sql2 = "select t.nombre, s.unidades from stock s, tienda t where s.tienda = t.cod and s.producto = '$p'";
        $t = mysqli_query($conexion,$sql2);

        while($filas = mysqli_fetch_array($t)){         
            $tienda[]=$filas;
        }

        foreach ($tienda as $ti){
            echo "Tienda ".$ti['nombre'].": ".$ti['unidades']." unidades <br/>";
        }
    }
    echo "</form>";      

?>