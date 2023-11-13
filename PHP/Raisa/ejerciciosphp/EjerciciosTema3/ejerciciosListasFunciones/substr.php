Ejemplo longitud negativo:
<?php
$resto = substr("abcdef",0,-1); //devuelve "abcde"
$resto = substr("abcdef",2,-1) ; //devuelve "cde"
$resto = substr("abcdef",4,-4); //devuelve false
$resto = substr("abcdef",-3,-1); //devuelve "de"
?>
sin cominenzo negativo
<?php
$resto = substr("abcdef", -1); // devuelve "f"
$resto = substr("abcdef", -2); // devuelve "ef"
$resto = substr("abcdef", -3 , 1); // devuelve "d"

?>