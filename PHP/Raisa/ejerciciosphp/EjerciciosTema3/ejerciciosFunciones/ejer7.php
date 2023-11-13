<!DOCTYPE html>
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 7</title>
</head>
<body>
<?php

if(!$_POST){	

    echo<<<formulario

        <h1>Obtener la media</h1>
        
        <form action="" method="post">

            Introduzca el primer numero:
            </br>
            <input type="text" size="10" maxlength="20" name="num1">  
            </br>
            </br>
            Introduzca el segundo numero:
            </br>
            <input type="text" size="10" maxlength="20" name="num2">  
            </br>
            </br>
            Introduzca el tercer numero:
            </br>
            <input type="text" size="10" maxlength="20" name="num3">  
            </br>
            </br>
            Introduzca el cuarto numero:
            </br>
            <input type="text" size="10" maxlength="20" name="num4">  
            </br>
            </br>
            <input type="submit" name="submit" value="Enviar">

        </form>

formulario;

}else{

    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $n3 = $_POST['num3'];
    $n4 = $_POST['num4'];

    echo media($n1,$n2,$n3,$n4);


}

function media($n1,$n2,$n3,$n4){

    $media=($n1+$n2+$n3+$n4)/4;

    $resultado ="La media de los numeros introducidos es: ".$media;

    return $resultado;
}

?>
</body>
</html>