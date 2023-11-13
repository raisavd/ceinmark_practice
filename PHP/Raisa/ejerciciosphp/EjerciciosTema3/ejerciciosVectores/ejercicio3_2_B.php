<?php	
function &distintos(){

    $numeros = array();

    for($x = 1; $x <= 4; $x++) {

        $nAleatorio = rand(0,9);
            
        if (in_array($nAleatorio, $numeros)) {
            $x--;
            continue;
        }

        $numeros[] = $nAleatorio;
    }
    return $numeros;
}

?>