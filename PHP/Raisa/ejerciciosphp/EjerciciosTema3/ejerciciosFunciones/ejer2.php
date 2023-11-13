<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 2</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h1>Introduzca un numero</h1>
        
        <form action="" method="post">

            <input type="text" size="20" maxlength="20" name="numero">            
            <input type="submit" name="submit" value="Aceptar">

        </form>

formulario;

}else{

    $num = $_POST['numero'];
    echo "El numero introducido es ".$num;
    echo "</br>";
    echo "El resultado de la suma de todos los numeros es ";
    echo sumar();

}

function sumar(){

    $num = $_POST['numero'];
    $cont = 1;
    $resultado=0;

    while($cont<$num){

        $resultado=$resultado+$cont;

        $cont++;

    }

	return $resultado;
}

?>
</body>
</html>
