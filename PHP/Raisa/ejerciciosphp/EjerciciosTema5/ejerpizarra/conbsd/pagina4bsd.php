<?php

$listafrutas= array();//ARRAY DE LISTAFRUTAS


$listafrutasprecioss= array(); //ARRAY DE PRECIOS DE LAS FRUTAS
$preciofinal=0;

for ($cont=0; $cont <5; $cont++) { 
   //if ($_POST["cant$cont"]>0 ||  $_POST["cant$cont"]=="") { //si es la cantidad ES MAYOR A 0 O IGUAL A 0 
   $listafrutas[$cont]=$_POST["nom$cont"]; //NOMBRE A LISTAFRUTAS
   $listafrutasprecioss[$cont]=$_POST["pre$cont"]; //PRECIO DE LA FUTA
   $precioindi=(int)$_POST["cant$cont"]*(int)$_POST["pre$cont"];
   $preciofinal=$precioindi+$preciofinal;

}

var_dump($_POST);

/*foreach ($variable as $key => $listafrutas) {
    echo $key."\------";
}*/

for ($i=0; $i < sizeof($listafrutas); $i++) { //VISAULIZAR LOS QUE TIENEN CANTIDAD DISTINTA A BLANCO
    if ($_POST["cant$i"]!="") {
        echo $_POST["nom$i"];
        echo "--";
}
}
/*
for ($i=0; $i <sizeof($listafrutas); $i++) { 
    if ($listafrutas["cant$i"]!="") {
        echo $listafrutas["cant$i"];
        echo "</br>";
     
    }

}*/
echo "Precio Final---->  ".$preciofinal;
/*echo $listafrutas[$i];
echo "----";
echo $listafrutasprecioss[$i];
 echo "</br>";*/   
?>