<?php
    
    session_start();

    @$conexion = new mysqli('localhost', 'root', '', 'dwes');
    $prodF = $conexion->query("select * from producto where familia = '$_SESSION[familia]'");
        
    while($filas = mysqli_fetch_assoc($prodF)){         
        $productos[]=$filas;
    }

    if(!$_POST){
        echo "Baja a un producto de la familia ".$_SESSION["familia"];
        echo '<form method="POST" action="">';
        echo "Productos: ";
        echo ' <select name="productos"> ';

        foreach ($productos as $op){
                
            echo " <option value=".$op['cod'].">".$op['nombre_corto']."</option> "; 
                        
        }  
        
        echo '<input type="submit" value="Enviar">';
        echo "</form>"; 

    }else{
        
        //var_dump($_SESSION);
        //var_dump($_POST);
        $pr = $_POST['productos'];
        $resultado = $conexion->query("select * from stock where producto = '$pr'");
        
        $existe = mysqli_num_rows($resultado);
       
        if($existe != 0){
            $conexion->autocommit(false);
            $nueva = $conexion->query("create table stockBorrado as select * from stock where producto = '$pr'");
            $borradoS = $conexion->query("delete from stock where producto = '$pr'");
            $borradoP = $conexion->query("delete from producto where cod = '$pr'");
            echo "Se ha creado tabla con el stock sobrante y se ha borrado de la tabla";

            if($nueva && $borradoS && $borradoP){
                $conexion->commit();
                echo "<br/>Baja completada";
            }else{
                $conexion->rollback(); 
                echo "<br/>ERROR al realizar la baja";
            }
            
        }else{
            $conexion->autocommit(false);
            $borrado = $conexion->query("delete from producto where cod = '$pr'");
            if($borrado){
                $conexion->commit();
                echo "<br/>Baja completada";                
            }else{
                $conexion->rollback(); 
                echo "<br/>ERROR al realizar la baja";
            }

        }

    }
?>