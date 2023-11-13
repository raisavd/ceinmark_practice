<?php

if(isset($_COOKIE['nombre'])){
    header("Location:redireccionarArboles2.php");
}else{
    header("Location:redireccionarArboles3.php");
}

?>