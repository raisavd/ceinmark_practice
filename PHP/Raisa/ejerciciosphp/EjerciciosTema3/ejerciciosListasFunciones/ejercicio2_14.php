<?php

$cadena = "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito";

$consonantes = ['b','c','d','f','g','h','j','k','l','m','n','ñ','p','q','r','s','t','v','w','x','y','z'];

for($var1 = 0; $var1 < sizeof($consonantes); $var1++){

    $cadena = strtolower($cadena);

    $num = substr_count($cadena, $consonantes[$var1]);

    if($num > 0){
        echo $consonantes[$var1]. "= ".$num;
        echo "<br/>";
    }
    
}

?>