<?php
 
$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");
 
$registros=mysqli_query($conexion,"select cod_estacion,nombre from estaciones where poblacion='Bilbao'") or die("Problemas en el select:".mysqli_error());
 
while ($reg=mysqli_fetch_array($registros)){
 
    echo "Codigo de la estacion: ".$reg['cod_estacion']."<br>";
    echo "Nombre de la estacion: ".$reg['nombre']."<br>";
    echo "<hr>";
}
 
mysqli_close($conexion);
 
?>
