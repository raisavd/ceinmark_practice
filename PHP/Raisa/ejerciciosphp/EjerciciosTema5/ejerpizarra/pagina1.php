<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="pagina2.php" method="post">
Nombre:
<input type="text" value="" name="nombre">
<br><br>
Apellidos:
<input type="text" value="" name="apellido">
<br><br>
<input type="submit" value="Enviar" name="boton">
<input type="reset" value="Borrar" name="">
</form>

<?php
session_start();


?>


</body>
</html>