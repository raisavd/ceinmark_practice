<?php
copy ($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
//El fichero destino se llama igual que el fichero origen
copy($_FILES['foto']['tmp_name'],'imagen.jpg');
//el fichero dstino se llamará: imagen.jpg
echo "La foto se registro en el servidor.<br />";
$nom=$_FILES['foto']['name'];
echo "<img src=\"$nom\" />"; //echo "<img src='$nom'>";
?>
