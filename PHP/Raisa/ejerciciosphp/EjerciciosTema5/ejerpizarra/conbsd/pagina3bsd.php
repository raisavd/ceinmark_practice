<?php
$conexion=mysqli_connect("localhost","root","JulenMusi123!", "frutas"); //conectamos con la base de datos
//$resultado = mysqli_query($conexion,'SELECT nombre,precio FROM precios');
$resultado = mysqli_query($conexion,'SELECT nombre,precio FROM precios');

$contador=0;

echo "<form action='pagina4bsd.php' method='post'>";
while ($fila = mysqli_fetch_array($resultado)){
   //echo $fila['nombre']; 
   echo "<input type='text' value='$fila[nombre]' name='nom$contador'><br>"; //nom[0] y se va sumando [1],hasta que se complete el array entero
   echo "----";
  
   //echo $fila['precio'];
   echo "<input type='text' value='$fila[precio]' name='pre$contador'>";
   echo " <input type='text' name='cant$contador'><br>";
   $contador++;
   echo "</br>";
}

echo "<br /> <input type='submit' name='enviarprecio' value='comprar'>";
echo "</form>";

mysqli_close($conexion);//cerramos conexion

?>
