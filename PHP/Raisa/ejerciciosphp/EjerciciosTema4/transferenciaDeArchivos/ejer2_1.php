<?php

echo "<b>Tratamiento de archivos subidos al servidor</b>";
echo "</br>";
echo "</br>";
echo "<b>1. Verifica si se permiten uploads</b>";
echo "</br>";

if(!get_cfg_var('file_uploads')){
    die("Para resolver este programa, asignar On a la directiva file_uploads de php.ini");
}else{
    echo "TRUE </br>";
}

echo "</br>";
echo "<b>2. Aquí se cargará el archivo (directiva upload_tmp_dir en php.ini)</b>";
echo "</br>";
echo get_cfg_var('upload_tmp_dir');
echo "</br>";
echo "(si se quiere modificar cambiar la directiva upload_tmp_dir en php.ini)";
echo "</br>";
echo "</br>";
echo "<b>3. Límite máximo del tamaño que se puede transferir al servidor</b>";
echo "</br>";
echo get_cfg_var('upload_max_filesize');
echo "</br>";
echo "(si se quiere modificar cambiar la directiva upload_max_filesize)";
echo "</br>";
echo "</br>";
echo "<b>4. Verifica si hubo algún error en la subida del archivo >> </b>";

if($_FILES['img']['error'] == 0){
    echo "0";
}else if($_FILES['img']['error'] == 4){
    echo "4";
}
echo "</br>";
echo "</br>";
echo '<b>5. Éste es el contenido de la superglobal $_FILES</b>';
echo "</br>";
echo "</br>";
echo '<b>**Para ésta visualización utilizar: print_r ($_FILES);*****</b>';
echo "</br>";
echo print_r($_FILES);
echo "</br>";
echo "</br>";
echo "<b>6. Otra verificación de la subida</b>";

if(move_uploaded_file($_FILES[name][tmp_name],"upload.txt") == true){
    echo "</br>";
    echo "OK";
    echo "</br>";
    echo "Archivo copiado en upload.txt";
}


?>