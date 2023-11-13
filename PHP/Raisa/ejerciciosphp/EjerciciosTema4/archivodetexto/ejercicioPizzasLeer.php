<?php
    header('Content-Type: text/html; charset=UTF-8');
    $fp = fopen('pizza.txt','r') or die('ERROR: No ha sido posible abrir el archivo. Revisa su nombre y sus permisos.');
    
    while (!feof($fp)) { // loop hasta que se llegue al final del archivo
            
        $line = fgets($fp);//leemos del registro segundo al último.
        
        $field[] = explode ('-', $line); // dividimos $line en sus celdas, separadas por el caracter |  e incorporamos la línea a la matriz $field
    }

    fclose($fp);
    
    var_dump($field);

    for($var = 0; $var < sizeof($field); $var++){        
        echo ' 
        <div>Nombre: '.$var[0].'</div>
        <div>Direccion: '.$var[1].'</div>';             
        for($var1 = 0; $var1 < sizeof($field); $var1++){
            echo '
            <div>Tipo: '.$var1[0].'</div>
            <div>Cantidad: '.$var1[1].'</div>
            <div>**************************************</div>';
        }
    } 
?>    