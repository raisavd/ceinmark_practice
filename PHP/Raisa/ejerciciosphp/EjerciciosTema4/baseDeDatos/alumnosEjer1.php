<?php

$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion"); 

$registros=mysqli_query($conexion,"select numero,fecha_compra from trenes") or die("Problemas en el select:".mysqli_error()); 

while ($reg=mysqli_fetch_array($registros)){

    echo "Numero de tren: ".$reg['numero']."<br>";
    echo "fecha de compra: ".$reg['fecha_compra']."<br>";
    echo "<hr>";
}

mysqli_close($conexion); 

?>