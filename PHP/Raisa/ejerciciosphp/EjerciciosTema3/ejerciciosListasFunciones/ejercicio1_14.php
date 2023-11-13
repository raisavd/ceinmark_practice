<?php

$cadena = "El doctor David Niven, profesor de la Universidad de Ohio, se propuso hace unos años averiguar cuáles eran las 100 claves que garantizan el éxito";

$vocales = ['a','á','e','é','i','í','o','ó','u','ú'];

for($var1 = 0; $var1 < sizeof($vocales); $var1++){

    $cadena = strtolower($cadena);

    $num = substr_count($cadena, $vocales[$var1]);

    if($num > 0){
       echo $vocales[$var1]. "= ".$num;
       echo "<br/>";
    }
    
    
    
}

/*echo "A = ".substr_count($cadena,'a');
echo "<br/>";
echo "E = ".substr_count($cadena,'e');
echo "<br/>";
echo "I = ".substr_count($cadena,'i');
echo "<br/>";
echo "O = ".substr_count($cadena,'o');
echo "<br/>";
echo "U = ".substr_count($cadena,'u');
*/

?>