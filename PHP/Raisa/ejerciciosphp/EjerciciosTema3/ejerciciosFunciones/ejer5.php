<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 5</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h1>Convertir blanco en guiones</h1>
        
        <form action="" method="post">

            Texto:
            <input type="text" size="10" maxlength="20" name="texto">  
            <input type="submit" name="submit" value="Enviar">

        </form>

formulario;

}else{

    $a = $_POST['texto'];
    echo "El resultado es:";
    echo "</br>";
    echo en_guiones($a);

}

function en_guiones($a){
	return str_replace(" ","-",$a);
}

?>
</body>
</html>