<?php

$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion"); 

mysqli_query($conexion ,"insert into  trenes  values ('$_POST[nTren]','$_POST[fecha]',$_POST[km])") or die("Problemas en el select"); 

mysqli_close($conexion); 

?>