<!DOCTYPE html >
<html >
<head>
<meta  charset=utf-8 />
<title>Ejercicio 6</title>
</head>
<body>

<?php
    
if(!$_POST){	

    echo<<<formulario

    <form method="POST" action="">                         
        Numeros a verificar:  <img src="ejer6_B.php">
        <br/> 
        Teclea los numeros que aparecen en el grafico
        <input type="text" name="num"/>
        <br/> 
        <input type="submit" name="submit" value="Verificar"/>
    </form>

formulario;

}else{   

    session_start();

    if ($_SESSION['numeroaleatorio'] == $_POST['num']){
        echo "Los números tecleados son Correctos";

    }else{
        echo "Los números tecleados NO son correctos";
    }
}

?>

</body>
</html>