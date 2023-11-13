<?php

session_start();

$conexion=mysqli_connect("localhost","root","", "productos") or die("Error en la conexion");

$fechaActual = date("d-m-y");

echo "BIENVENIDO ".$_SESSION['nom']." ".$_SESSION['apel'];
echo "<br/>";
echo "fecha: ".$fechaActual."<br/>";
echo "<br/>";

$registros=mysqli_query($conexion,"select * from productos") or die("Problemas en el select:".mysqli_error());

$cont = 0;

echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Productos</font> </td> 
          <td> <font face="Arial">Precio</font> </td> 
          <td> <font face="Arial">Cantidad</font> </td> 
      </tr>';

while ($reg=mysqli_fetch_array($registros)){

    echo '<tr> 
        <td><input type="text" name="n$cont">'.$reg['1'].'</td> 
        <td>'.$reg['2'].'</td> 
        <td><input type=\"text\" name=\"cantidad[]\"/></td>
    </tr>';
}

?>