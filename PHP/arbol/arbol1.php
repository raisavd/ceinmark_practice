<?php
//var_dump($_COOKIE);

if(!isset($_COOKIE['minombre'])){
    echo '<a href="arbol2.php">Escribe tu nombre</a>';
}else{

    echo "<H3>Hola ".$_COOKIE['minombre']."</H3>";
    echo<<<formulario

        <H1>ÁRBOLES</H1>
        <br/>
        Un arbol es una planta perenne, de tallo leñoso, que se ramifica.
        <br/>
        El termino hace referencia habitualmente a aquellas plantas cuya
        <br/>
        diferente segun las fuentes: dos metros, 1 tres metros, 2 3 cinco metros
        <br/>
        <img src="arbol.png"/>
formulario;
}

?>