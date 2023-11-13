<?php
session_start(); 
session_destroy();

echo "Fin de la sesion";
echo "<a href=\"sesion1.php\">Volver a la primera pagina</a>";
?>