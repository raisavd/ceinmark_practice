<?php

$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

mysqli_query($conexion,"create table trenesAntiguos as select * from trenes where fecha_compra <= '2000/12/31'") or die("Problemas en el select:".mysqli_error());

mysqli_query($conexion,"delete from trenes where fecha_compra <= '2000/12/31'") or die("Problemas en el select:".mysqli_error());

mysqli_query($conexion,"alter table trenes add column capacidad_viajeros_sentados int(20)") or die("Problemas en el select:".mysqli_error());

mysqli_query($conexion,"insert into trenes values('tr5',CURRENT_DATE,25000,1000)") or die("Problemas en el select:".mysqli_error());
/*
mysqli_query($conexion,"alter table recorrido add constraint foranea foreign key(estacion) references estaciones(cod_estacion)") or die("Problemas en el select:".mysqli_error());
mysqli_query($conexion,"alter table recorrido add constraint foranea2 foreign key(tren) references trene(numero)") or die("Problemas en el select:".mysqli_error());
*/
$registros=mysqli_query($conexion,"select nombre, problacion from estaciones e, recorrido r where e.cod_estacion=r.estacion group by nombre, poblacion having count(*)") or die("Problemas en el select:".mysqli_error());
$registro=mysqli_query($conexion,"select nombre, problacion from estaciones e, recorrido r where e.cod_estacion=r.estacion group by nombre, poblacion having count(*)=0") or die("Problemas en el select:".mysqli_error());

while ($reg=mysqli_fetch_array($registros)){

    echo "Nombre: ".$reg['nombre']."<br>";
    echo "Poblacion: ".$reg['poblacion']."<br>";
    echo "<hr>";
}

while ($reg=mysqli_fetch_array($registro)){

    echo "Nombre: ".$reg['nombre']."<br>";
    echo "Poblacion: ".$reg['poblacion']."<br>";
    echo "<hr>";
}
 
mysqli_close($conexion);

?>