<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 6</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h1>Convertir euros en pesetas</h1>
        
        <form action="" method="post">

            Introduzca la cantidad a convertir
            </br>
            <input type="text" size="10" maxlength="20" name="euros">  

            <input type="submit" name="submit" value="Enviar">

        </form>

formulario;

}else{

    $euros = $_POST['euros'];

    echo $euros."€ son ";
    echo convertir($euros);


}

function convertir($euros){

    $diferencia = 166.38;

    $resultado = $diferencia*$euros;

	return $resultado." pesetas";
}

?>
</body>
</html>