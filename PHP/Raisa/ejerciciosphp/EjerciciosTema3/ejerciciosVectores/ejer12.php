<?php

$lista = [
        'curso1' => ['nombre0'=>'Jon','nombre1'=>'Ane','nombre2'=>'Miren','nombre3'=>'Aitor','nombre4'=>'Alberto'],
        'curso2'=>['nombre0'=>'Begoña','nombre1'=>'Beatriz','nombre2'=>'Carmen','nombre3'=>'María','nombre4'=>'Zaloa']
        ];

    foreach($lista as $indice => $curso){

        echo "Alumnos del Curso:  ".$indice;
        echo "<br />";       

        foreach($curso as $alumnos){
            echo $alumnos;
            echo "<br />";		
        }
}
      

?>