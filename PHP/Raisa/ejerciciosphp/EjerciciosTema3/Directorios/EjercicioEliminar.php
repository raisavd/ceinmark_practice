<?php  

$carpeta = "C:/wamp64/www/misApuntes";

function borrar($carpeta){

    foreach(glob($carpeta. "/*") as $archivos_carpeta){
        
        if(is_dir($archivos_carpeta)){

            borrar($archivos_carpeta);
            
        }else{

            unlink($archivos_carpeta);
        } 
    }

    rmdir($carpeta); 
}

borrar($carpeta);

if(is_dir($carpeta) == false){

    echo "Se ha borrado el directorio";

}else{

    echo "No se ha podido borrar el directorio";
}

?>
