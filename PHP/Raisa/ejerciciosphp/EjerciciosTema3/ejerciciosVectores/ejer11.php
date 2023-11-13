<?php

$lista = [
'curso1' => ['Jon','Ane','Miren','Aitor','Alberto'],
'curso2'=>['Begoña','Beatriz','Carmen','María','Zaloa']
];

for($x=0;$x<2; $x++){
    echo "Alumnos del Curso:  ".($x+1);
    echo "<br />";
    for($y=0;$y<5; $y++){
        echo  $lista["curso".($x+1)][$y];
        echo "<br />";
    }
}

?>