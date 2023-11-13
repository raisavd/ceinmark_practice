<?php
$conexion=mysqli_connect("localhost","root","", "dwesTema5") or die("Error en la conexion");
 
$registros=mysqli_query($conexion,"insert into usuarios values('dwes',md5('abc123.'))") or die("Problemas en el select:".mysqli_error());
$registros=mysqli_query($conexion,"insert into usuarios values('despliegue',md5('abc012.'))") or die("Problemas en el select:".mysqli_error());
$registros=mysqli_query($conexion,"insert into usuarios values('dwec',md5('abc456.'))") or die("Problemas en el select:".mysqli_error());
$registros=mysqli_query($conexion,"insert into usuarios values('diseño',md5('abc789.'))") or die("Problemas en el select:".mysqli_error());

//mb5 encriptar contraseña

?>