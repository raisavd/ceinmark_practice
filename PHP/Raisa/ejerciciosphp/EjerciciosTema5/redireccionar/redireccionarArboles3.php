<?php

if(!$_POST){

    if(isset($_GET['enlace'])){ 

        echo<<<formulario
            <form method="POST" action="redireccionarArboles3.php">
            
            Introduce tu nombre <input type="text" name="nombre">
            <input type="submit" name="boton" value="Enviar">

            </form>
        formulario;

    }else{
        echo '<a href="redireccionarArboles3.php?enlace=si">Escribe tu nombre</a>';
    }

}else{
    setcookie("nombre","$_POST[nombre]",0);
    echo '<a href="redireccionarArboles.php">Ver contenido de la pagina</a>';
}

?>