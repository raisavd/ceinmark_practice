<?php

session_start();

$_SESSION['edad'] = $_POST['edad'];

echo "Mi nombre es: ".$_POST['nombre'];
echo "<br/>";
echo "<a href=\"ejer1_3.php\">Ver edad</a>";

?>