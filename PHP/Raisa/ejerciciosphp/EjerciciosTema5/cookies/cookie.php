<?php

if(!isset($_POST['boton'])){
   
    header('Content-Type: text/html; charset=UTF-8');
    if ($_REQUEST['radio']=="rojo")
    setcookie("color","#ff0000",time()+60*60*24*365);
    elseif ($_REQUEST['radio']=="verde")
    setcookie("color","#00ff00",time()+60*60*24*365);
    elseif ($_REQUEST['radio']=="azul")
    setcookie("color","#0000ff",time()+60*60*24*365);
    echo '<a href="">Ir a la otra página</a>';
}
?>

<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Insert title here</title>
</head>
<body
<?php if (isset($_COOKIE['color']))  echo " bgcolor=\"$_COOKIE[color]\"" 
?>
>
<?php if(!isset($_POST['boton'])){
?>
<form action="cookie.php" method="post">
Seleccione de que color desea que sea la página :<br />
<input type="radio" value="rojo" name="radio">Rojo<br />
<input type="radio" value="verde" name="radio">Verde<br />
<input type="radio" value="azul" name="radio">Azul<br />

<input type="submit" name="boton" value="Crear cookie">
</form>

<?php }else{
    header('Content-Type: text/html; charset=UTF-8');
    if ($_REQUEST['radio']=="rojo")
    setcookie("color","#ff0000",time()+60*60*24*365);
    elseif ($_REQUEST['radio']=="verde")
    setcookie("color","#00ff00",time()+60*60*24*365);
    elseif ($_REQUEST['radio']=="azul")
    setcookie("color","#0000ff",time()+60*60*24*365);
    echo '<a href="">Ir a la otra página</a>';
}
?>
</body>
</html>