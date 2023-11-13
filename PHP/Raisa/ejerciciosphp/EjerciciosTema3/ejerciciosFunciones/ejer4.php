<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 4</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h2>Introduzca un numero</h2>
        
        <form action="" method="post">

            <input type="text" size="10" maxlength="20" name="num">  
            </br>     
            </br>     
            Introduzca que quiere calcular:
            </br>     
            <select name="metodo">
                <option value="cuadrado">Cuadrado</option>
                <option value="cubo">Cubo</option>
            </select>
            </br>     
            </br> 
            <input type="submit" name="submit" value="Aceptar">

        </form>

formulario;

}else{
    $num = $_POST['num'];
	$met = $_POST['metodo'];

	switch ($met){
		case "cuadrado": 
            echo $num." al cuadrado es ";
			echo cuadrado($num); 
			break;
		case "cubo":     
            echo $num." al cubo es ";
			echo cubo($num); 
			break;
	}
}

function cuadrado($num){

    return $num**2;
}

function cubo($num){

    return $num**3;
}


?>
</body>
</html>