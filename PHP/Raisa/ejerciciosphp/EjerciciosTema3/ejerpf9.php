<?php
    if(!$_GET){	  

echo<<<formulario
    <form method="GET" action="todoUno.php"> 
        Teclea tu nombre: 
        <input type="text" name="nombre"> 
        <br /> 
        <input type="submit" value="aceptar"> 
    </form>
formulario;
    }

    else{  
        echo "El nombre tecleado es:";  
        echo $_GET['nombre'];
    }
?>
