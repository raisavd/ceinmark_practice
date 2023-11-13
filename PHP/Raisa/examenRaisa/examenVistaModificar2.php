<?php
    session_start();

    //var_dump($_SESSION);
    //var_dump($_POST);
    @$conexion = new mysqli('localhost', 'root', '', 'dwes');
    $conexion->autocommit(false);
    $modificacion = $conexion->query("update producto set PVP = '$_POST[pr]' where cod = '$_SESSION[prod]'");
    if($modificacion){
        $conexion->commit();
        echo "<br/>Modificacion completada";
    }else{
        $conexion->rollback(); 
        echo "<br/>ERROR al realizar la modificacion";
    }

?>