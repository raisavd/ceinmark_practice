<?php
copy ($_FILES['f1']['tmp_name'],$_FILES['f1']['name']);
//El fichero destino se llama igual que el fichero origen
echo "Se ha subido correctamente";
?>