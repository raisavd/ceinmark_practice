<?php
$cadena = "Esto es un ejemplo";
/* utilizamos el espacio como token (marca donde cortar) */
$tok = strtok($cadena," ");
while($tok !== false) {
echo "Palabra = $tok <br /> " ;
$tok = strtok(" ");
}
?>