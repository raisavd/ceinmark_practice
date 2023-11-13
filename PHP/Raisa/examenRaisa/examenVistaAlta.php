<?php
    
    session_start();
    
    if(!$_POST){
        echo "Alta a un producto de la familia ".$_SESSION["familia"];

        echo '<form action="" method="post">';
        echo '<br/>Codigo: <input type="text" name="cod">';
        echo '<br/>Nombre: <input type="text" name="nom">';
        echo '<br/>Nombre corto: <input type="text" name="nombre_corto">';
        echo '<br/>Descripcion: <input type="text" name="descripcion">';
        echo '<br/>PVP: <input type="text" name="pvp">';
        echo '<br/><br/><input type="submit" value="Enviar"/>';
        echo "</form>";
        
    }else{

        //var_dump($_SESSION);
        //var_dump($_POST);
        @$conexion = new mysqli('localhost', 'root', '', 'dwes');

        $conexion->autocommit(false);

        $resultadoPro = $conexion->query("insert into producto values ('$_POST[cod]', '$_POST[nom]', '$_POST[nombre_corto]', '$_POST[descripcion]', '$_POST[pvp]', '$_SESSION[familia]')");
        $resultadoTi1 = $conexion->query("insert into stock values ('$_POST[cod]', 1, 10)");
        $resultadoTi2 = $conexion->query("insert into stock values ('$_POST[cod]', 2, 10)");
        $resultadoTi3 = $conexion->query("insert into stock values ('$_POST[cod]', 3, 10)");

        
        if($resultadoPro && $resultadoTi1 && $resultadoTi2 && $resultadoTi3){
            $conexion->commit();
            echo "<br/>Alta completada";
        }else{
            $conexion->rollback(); 
            echo "<br/>ERROR al realizar el alta";
        }
    }
?>