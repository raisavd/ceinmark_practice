<?php

if(!$_POST){
    echo<<<formulario
        <form method="POST" action="cookieArboles2.php">
        
        Introduce tu nombre <input type="text" name="nombre">
        <input type="submit" name="boton" value="Enviar">

        </form>
    formulario;

}else{
    setcookie("nombre","$_POST[nombre]",0);
    echo '<a href="cookieArboles.php">Ver contenido de la pagina</a>';
}

?>