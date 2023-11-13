<?php

$ar=fopen("datos.txt","r") or die ("Problemas al leer el archivo");

$line = fgets($ar); 

while (!feof($ar)) {
    
$field[] = explode (';', $line); 

$line = fgets($ar);

}

//var_dump($field);

$totalA = 0;
$total = 0;

foreach($field as $infor){ 

    $total = $total + (int)$infor[2];

    if($infor[0] == "DAW"){
        $totalA = $totalA + (int)$infor[2];
    }
}
    echo "Total alumnos: $total";
    echo "<br/>";  
    echo "Numero de alumnos del ciclo web: $totalA";  
    echo "<br/>";
   


?>