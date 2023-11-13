Ejemplo usando ===
<?php
$mystring = 'abc';
$findme = 'a';
$pos = strpos($mystring, $findme);
// Nótese el uso de ===. Puesto que == simple no funcionará como
// se espera
// porque la posición de 'a' está en el 1° (primer) caracter.
if ($pos === false) {
echo "La cadena '$findme' no fue encontrada en la cadena
'$mystring'";
} else {

echo "La cadena '$findme' fue encontrada en la cadena
'$mystring'";
echo " y existe en la posición $pos";
}
?>
Ejemplo usando ===
<?php
$mystring = 'abc';
$findme = 'a';
$pos = strpos($mystring, $findme);
// El operador !== también puede ser usado. Puesto que != no funcionará
//como se espera
// porque la posición de 'a' es 0. La declaración (0 != false) se evalúa a
// false.
if ($pos !== false) {
echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
echo " y existe en la posición $pos";
} else {
echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
}
?>