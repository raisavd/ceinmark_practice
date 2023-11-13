<?php
session_start();
setcookie("edad","$_POST[edad]",0);
echo "Mi nombre es: ".$_POST["nombre"]."<br>";
echo '<a href="encerado3.php">VER EDAD</a>'
?>