<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 9</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <form action="" method="post">

            Introduzca el numero de filas:
            </br>
            <input type="text" size="10" maxlength="20" name="num">  
            </br>
            </br>
            Introduzca caracter a dibujar:
            </br>
            <input type="text" size="10" maxlength="20" name="caracter">  
            </br>
            </br>
            <input type="submit" name="submit" value="Enviar">

        </form>

formulario;

}else{

    $num = $_POST['num'];
    $car = $_POST['caracter'];

    echo mostrar($num,$car);

}

function mostrar($num,$car){

    for($var1=1; $var1<=$num; $var1++){
      
        for($var2=$var1; $var2<=$num; $var2++){
            
            
            echo $car;

        }  
        
        echo "</br>";
    }
}

?>
</body>
</html>