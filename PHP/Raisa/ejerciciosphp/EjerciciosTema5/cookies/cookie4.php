<?php
header('Content-Type: text/html; charset=UTF-8');
if ($_REQUEST['radio']=="rojo")
 setcookie("colores","#ff0000",time()+60*60*24*365);
elseif ($_REQUEST['radio']=="verde")
setcookie("colores","#00ff00",time()+60*60*24*365);
elseif ($_REQUEST['radio']=="azul")
setcookie("colores","#0000ff",time()+60*60*24*365);

?> 
<html>
<head>
<title>Problema</title>
</head>
<body>
Se creó la cookie.
<br />
<a href="cookie3.php">Ir a la otra página</a>
</body>
</html>
