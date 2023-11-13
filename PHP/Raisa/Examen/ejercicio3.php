<?php

$var = array (3,20,5,9, array(10,20,2,4,7));

function recorrido($arg){

    $resultado = 0;

    foreach($arg as $key => $value){

        if(is_array($value)){

            $array2 = $arg[$key];
            echo $resultado.'<br>';
            $resultado = $resultado + recorrido($array2);

        }else{

            $resultado = $resultado + $value;
        }
    }

    $resultado = $resultado - $arg[0];
    return $resultado;
}

$total = recorrido($var);
echo $total.'<br>';

?>