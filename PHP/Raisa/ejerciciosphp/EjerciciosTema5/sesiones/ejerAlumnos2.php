<?php
session_start();

if(isset($_SESSION['nomAlumno'])){

    echo "Bienvenido/a ".$_SESSION['nomAlumno'];

}else{
    echo "No puede visitar esta pagina";
}

session_destroy();

?>