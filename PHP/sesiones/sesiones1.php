<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Pagina 1</title>
</head>
<body>
<?php
if(isset($_SESSION['nombre'])){
echo "<p>Has iniciado sesion: " . $_SESSION['nombre'] . "";
echo "<p><a href='sesiones3.php'>Cerrar Sesion</a></p>";
}else {
?>
<form action="sesiones2.php" method="POST">
<p>Nombre:<input type="text" placeholder="Tu
Nombre!" name="nombre" required/></p><br />
<input type="submit" value="Enviar" />
</form>
<?php
}
?>
<a href="sesiones2.php">Ir a pagina 2</a>
</body>
</html>
