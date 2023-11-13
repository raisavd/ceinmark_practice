<?php

$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion"); 

$registros=mysqli_query($conexion,"select e.nombre, t.numero, t.fecha_compra from recorrido r, trenes t, estaciones e where t.numero = r.tren and e.cod_estacion = r.estacion") or die("Problemas en el select:".mysqli_error());

while ($reg=mysqli_fetch_array($registros)){

    echo "Nombre de la estacion: ".$reg['nombre']."<br>";
    echo "Numero de estacion : ".$reg['numero']."<br>";
    echo "Fecha de compra: ".$reg['fecha_compra']."<br>";
    echo "<hr>";
}

mysqli_close($conexion); 

?>