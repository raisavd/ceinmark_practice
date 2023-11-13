<?php

if(!$_POST){
    echo<<<formulario
        <form method="POST" action="arbol2.php">

        Introduce tu nombre <input type="text" name="minombre">
        <input type="submit" name="boton" value="Enviar">

        </form>
formulario;

}else{
    setcookie("minombre","$_POST[minombre]",0);
    echo '<a href="arbol1.php">Ver contenido de la pagina</a>';
}

?>