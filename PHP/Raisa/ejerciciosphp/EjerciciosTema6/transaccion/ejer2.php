<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');
$error = $conexion->connect_errno;

if ($error == null) {
    $conexion->autocommit(false);  

    $resultado1 = $conexion->query("UPDATE stock SET unidades = 1 WHERE producto = '3DSNG' and tienda = 1");
    if ($resultado1) {
        print "<p>Se ha actualizado $conexion->affected_rows registro.</p>";
    }else{
        echo "error1";
    }

    $resultado2 = $conexion->query("INSERT INTO stock VALUES ('3DSNG',3,1)");
    if ($resultado2) {
        print "<p>Se ha insertado $conexion->affected_rows registro.</p>";
    }else{ 
        echo "error2";
    }

    if($resultado1 && $resultado2){
        $conexion->commit();
        echo "<br/>Guardado";
    }else{
        $conexion->rollback(); 
        echo "<br/>ERROR";
    }
}

$conexion->close();
?>