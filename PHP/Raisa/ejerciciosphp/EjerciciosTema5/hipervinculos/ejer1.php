<?php
$conexion=mysqli_connect("localhost","root","", "trenes") or die("Error en la conexion");

if(!isset($_GET['datoLimite']) && !isset($_GET['datoMenor'])){
    $primeros = 0;
    $cont=mysqli_query($conexion,"select * from recorrido") or die("Problemas en el select:".mysqli_error());
    $limite=mysqli_num_rows($cont);
}else if(!isset($_GET['datoMenor'])){
    $primeros=$_GET['datoLimite']+2;
}else{
    $primeros=$_GET['datoMenor']-2;    
}

$registros=mysqli_query($conexion,"select * from recorrido limit $primeros,2") or die("Problemas en el select:".mysqli_error());


if(!$_GET){
    
    while ($reg=mysqli_fetch_array($registros)){

        echo "Numero de tren: ".$reg['0']."<br>";
        echo "Estacion: ".$reg['1']."<br>";
        echo "<hr>";
    }

    echo "<br/>";
    echo "Anterior ";
    echo "<a href=\"ejer1.php?datoLimite=$primeros\">Siguiente</a>";
    

}else{

$registros=mysqli_query($conexion,"select * from recorrido limit $primeros,2") or die("Problemas en el select:".mysqli_error());

while ($reg=mysqli_fetch_array($registros)){

    echo "Numero de tren: ".$reg['0']."<br>";
    echo "Estacion: ".$reg['1']."<br>";
    echo "<hr>";
}

echo "<br/>";

if($primeros != 0){
    echo "<a href=\"ejer1.php?datoMenor=$primeros\">Anterior</a>  ";
}

if($primeros < $limite-2){
    echo "<a href=\"ejer1.php?datoLimite=$primeros\">Siguiente</a>";
    echo $primeros;
    echo $limite;
}

}

?>