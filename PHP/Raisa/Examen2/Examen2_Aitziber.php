<?php

if(!$_POST){

    echo <<< formulario
    <form action="Examen2_1.php" method="post" enctype="multipart/form-data">
        Selecciona el archivo 1:
        <input type="file" name="ar1">
        <br/>
        Selecciona el archivo 2:
        <input type="file" name="ar2">
        <br/>
        <input type="submit" value="Enviar"> 
    </form>
formulario;

}

?>