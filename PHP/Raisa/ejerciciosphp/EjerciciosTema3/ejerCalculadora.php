<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Calculadora</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h1> Calculadora</h1>
        
        <form action="" method="post">
            n1: <input type="text" size="20" maxlength="20" name="primera">
            n2: <input type="text" size="20" maxlength="20" name="segunda">
            <select name="operador">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            
            <input type="submit" name="submit" value="enviar">
        </form>

formulario;

}else{

    $pri = $_POST['primera'];
	$seg = $_POST['segunda'];
	$op = $_POST['operador'];
	echo "<h1> Calculadora</h1>";
	echo "<h3>n1: $pri &nbsp n2: $seg <br> operacion: $op</h3>";
	echo "<br>resultado: ";
	switch ($op){
		case "+": 
			echo sumar($pri,$seg); 
			break;
		case "-":     
			echo restar($pri,$seg); 
			break;
		case "*": 
			echo multiplicar($pri,$seg); 
			break;
		case "/": 
			echo dividir($pri,$seg); 
			break;
	}
}

function sumar($a,$b){
	return $a + $b;
}
function restar($a,$b){
	return $a - $b;
}
function multiplicar($a,$b){
	return $a * $b;
}
function dividir($a,$b){
	return $a / $b;
}

?>
</body>
</html>
