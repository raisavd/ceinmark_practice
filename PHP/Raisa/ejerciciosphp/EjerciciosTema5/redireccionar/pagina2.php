<?php
//$direccion = $_POST['direccion']; tambien se puede concatenar la variable
header("Location: http://$_REQUEST[direccion]");
exit(); //para evitar que se ejecute más código de forma inesperada
?>