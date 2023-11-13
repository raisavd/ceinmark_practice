<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
{
  if (isset($_REQUEST['error']))
    echo "Tecleó clave incorrecta<br>";
}	
?>
<form method="post" action="ejer2.php">
Teclear la clave:
<input type="password" name="clave">
<br>
<input type="submit" value="confirmar">
</form>

</body>
</html>