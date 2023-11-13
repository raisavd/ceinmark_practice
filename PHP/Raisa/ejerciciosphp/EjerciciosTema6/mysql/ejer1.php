<?php
@$conexion = new mysqli('localhost', 'root', '', 'dwes');

$error = $conexion->connect_errno;

if ($error == null) {

    $nueva = $conexion->query('create table unidadesNueva as select * from stock where unidades=1');

    if($nueva == true){
        print "Se ha creado la tabla correctamente <br/>";
    }else{
        print "No se ha podido crear la tabla <br/>";
    }

    $resultado = $conexion->query('DELETE FROM stock WHERE unidades=1'); 

    if ($resultado == 0) {
        print "<p>Se han borrado $conexion->affected_rows registros.</p> <br/>";
    }else{
        print "No se ha podido borrar los datos <br/>";
    }

    $volver = $conexion->query('insert into stock select * from unidadesNueva');

    if($volver == true){
        print "Se han añadido los datos correctamente <br/>";
    }else{
        print "No se han podido añadir los datos <br/>";
    }

    $borrar = $conexion->query('DROP TABLE unidadesNueva');

    if($borrar == true){
        print "Se ha borrado la tabla <br/>";
    }else{
        print "No se ha podido borrar la tabla <br/>";
    }

    $conexion->close();
}else{
    print "No se ha podido conectar a la base de datos";
}

?>
