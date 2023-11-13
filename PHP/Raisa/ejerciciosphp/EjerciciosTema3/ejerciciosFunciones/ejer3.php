<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 3</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h1>Introduzca dos numeros</h1>
        
        <form action="" method="post">

            Primer numero:
            <input type="text" size="10" maxlength="20" name="num1">  
            </br>
            Segundo numero:
            <input type="text" size="10" maxlength="20" name="num2">
            </br>
            <input type="submit" name="submit" value="Aceptar">

        </form>

formulario;

}else{

    $n1 = $_POST['num1'];
	$n2 = $_POST['num2'];

    if($n1>$n2){

        echo "El primer numero ".$n1." es mayor que el segundo numero ".$n2;

    }else if($n1<$n2){

        echo "El primer numero ".$n1." es menor que el segundo numero ".$n2;

    }else if($n1==$n2){
        echo "Los numeros son iguales";
    }

}

?>
</body>
</html>