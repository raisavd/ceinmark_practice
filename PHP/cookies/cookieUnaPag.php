<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Las cookies</title>
</head>
<body
<?php

function borrar(){
	setcookie("colores","",time()-1);
}

borrar();
?>
<?php if (isset($_COOKIE['colores']))  echo " bgcolor=\"$_COOKIE[colores]\"" 
?>
>
<?php
if (!$_REQUEST) {
	echo 
	"<form action='cookieUnaPag.php' method='post'>
	Seleccione de que color desea que sea la página :<br />
	<input type='radio' value='rojo' name='radio'>Rojo<br />
	<input type='radio' value='verde' name='radio'>Verde<br />
	<input type='radio' value='azul' name='radio'>Azul<br />
	<input type='submit' value='Crear cookie' name='b1'>
	</form>";
}else{

	header('Content-Type: text/html; charset=UTF-8');
	if ($_REQUEST['radio']=="rojo")
	 setcookie("colores","#ff0000",time()+60*60*24*365);
	elseif ($_REQUEST['radio']=="verde")
	setcookie("colores","#00ff00",time()+60*60*24*365);
	elseif ($_REQUEST['radio']=="azul")
	setcookie("colores","#0000ff",time()+60*60*24*365);

echo
	"<html>
	<head>
	<title>Problema</title>
	</head>
	<body>
	Se creó la cookie.
	<br />
	<a href='cookieUnaPag.php'>Ir a la otra página</a>
	</body>
	</html>";

}

?>
</body>
</html>