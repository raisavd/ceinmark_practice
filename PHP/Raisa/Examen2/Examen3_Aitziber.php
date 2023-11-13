<?php

$conexion=mysqli_connect("localhost","root","", "vuelos") or die("Error en la conexion");

$registros = mysqli_query($conexion ,"select a.nombre, a.ciudad, a.pais from aeropuertos a, vuelos v where a.coda = v.codAeropuertoSalida and v.fechaSalida = CURRENT_DATE GROUP BY a.nombre, a.ciudad, a.pais having count(*)>3") or die("Problemas en el select"); 

while ($reg=mysqli_fetch_array($registros)){

    echo "Nombre: ".$reg['nombre'];
    echo "<br>";
    echo "Cuidad: ".$reg['ciudad'];
    echo "<br>";
    echo "Pais: ".$reg['pais'];
    echo "<br>";
    echo "<br>";

}

mysqli_close($conexion); 

?>