<?php

echo "Array bidimensionales <br />";
/*$lista[0][0]="Jon ";
$lista[0][1]="Ane ";
$lista[0][2]="Miren";
$lista[0][3]="Aitor";
$lista[0][4]="Alberto";
$lista[1][0]="Begoña";
$lista[1][1]="Beatriz";
$lista[1][2]="Carmen";
$lista[1][3]="María";
$lista[1][4]="Zaloa";*/
// $lista anterior se puede codificar:
$lista[]=array("Jon","Ane","Miren","Aitor","Albert");
$lista[]=array("Begoña","Bea","Carmen","Maria","Zaloa");
//$lista también se puede codificar:
//$lista=array(array("Jon","Ane","Miren","Aitor","Albert"),array("Begoña","Bea","Carmen","Maria","Zaloa"));

for($x=0;$x<2; $x++){
    echo "Alumnos del Curso:  ".($x+1);
    echo "<br />";
    for($y=0;$y<5; $y++){
        echo  $lista[$x][$y];
        echo "<br />";
    }
}
?>