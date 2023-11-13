<?php

var_dump($_POST);

copy ($_FILES['ar1']['tmp_name'],$_FILES['ar1']['name']);
copy ($_FILES['ar2']['tmp_name'],"segundoArchivo.txt");

if($_FILES['ar1']['error']==0 && $_FILES['ar2']['error']==0){

    echo "Se han subido los 2 archivos correctamente";

}else if($_FILES['ar1']['error']==0){

    echo "¡Solo se ha subido el archivo1.txt!";
    
}else if($_FILES['ar2']['error']==0){

    echo "¡Solo se ha subido el segundoArchivo.txt!";
}

?>