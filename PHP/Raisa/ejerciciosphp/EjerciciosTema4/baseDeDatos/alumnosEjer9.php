<?php
//var_dump($_POST);
 
$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

mysqli_query($conexion,"update trenes set fecha_compra='$_POST[fechan]' where numero='$_POST[oculto]'") or die("Problemas en el select:".mysqli_error());

$registros=mysqli_query($conexion,"select * from trenes") or die("Problemas en el select:".mysqli_error());

while ($reg=mysqli_fetch_array($registros)){

    echo "Numero: ".$reg['numero']."<br>";
    echo "Fecha de compra: ".$reg['fecha_compra']."<br>";
    echo "Km recorridos: ".$reg['km_recorridos']."<br>";
    echo "<hr>";
}
 
mysqli_close($conexion);
 
?>