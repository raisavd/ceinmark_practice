<?php

if(!$_POST){

echo "<H2>Seleccionar un archivo para enviar al servidor</H2>";

echo <<< formulario
    <form action="ejer2_1.php" method="post" enctype="multipart/form-data">
        Seleccione el archivo:
        <input type="file" name="img"><br />
        <input type="submit" value="Enviar">
        <!--se puede incluir una etiqueta de tipo hidden con el nombre ‘max_file_size’ //para indicar (value) la cantidad maxima de bytes que se pueden subir
        <INPUT type='hidden' name='max_file_size' value='2500000'> -->
    </form>
formulario;
}

?>