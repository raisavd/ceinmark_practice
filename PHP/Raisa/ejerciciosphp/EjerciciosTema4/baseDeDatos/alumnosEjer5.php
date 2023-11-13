<?php
 
$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");
 
$registros=mysqli_query($conexion,"select count(*) from estaciones where poblacion='Bilbao'") or die("Problemas en el select:".mysqli_error());

while ($reg=mysqli_fetch_array($registros)){

    echo "Numero de estaciones en Bilbao: ".$reg['0']."<br>";
    echo "<hr>";
}
 
mysqli_close($conexion);
 
?>
