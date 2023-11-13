<?php

$fechaActual; 

$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");
 
$registros=mysqli_query($conexion,"select fecha_compra from trenes where numero = '$_POST[nTren]'") or die("Problemas en el select:".mysqli_error());

while ($reg=mysqli_fetch_array($registros)){

    $fechaActual = $reg['fecha_compra'];

} 

$existe = mysqli_num_rows($registros);

if($existe != 0){
    
    echo"
        <form action=\"alumnosEjer9.php\" method=\"post\" >

        <p>Fecha de compra a modificar: <input type=\"date\" name=\"fechav\" size=\"20\" value=\"$fechaActual\" disabled/></p>
        <p>Fecha de compra nueva: <input type=\"date\" name=\"fechan\" size=\"20\"/></p>
        <input type=\"hidden\" name=\"oculto\" value=\"$_POST[nTren]\"/>";

        echo '<p><input type="submit"  name="submit" value="Modificar" /></p>
        </form>';
}else{
    echo'El numero de tren no esta en la base de datos';
}

?>