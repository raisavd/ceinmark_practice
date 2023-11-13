<?php
session_start();
$fecha=date('d-m-Y');
echo "Bienvenido ".$_SESSION['nombre'];
echo "<br> ".$fecha;

$_SESSION['formapago'] = $_POST['formapago'];
$_SESSION['entrega'] = $_POST['entrega'];
?>

<form action="pagina4.php" method="post">
<br>
Zapatillas      20€ <input type="text" name="zapatillas"  value=""><br><br>
Calcetines       5€ <input type="text" name="calcetines" value=""><br><br>
Camisetas       25€ <input type="text" name="camisetas" value=""><br><br>
Sudaderas       30€ <input type="text" name="sudaderas" value=""><br><br>
Gorros          10€ <input type="text" name="gorros" value=""><br><br><br>
<input type="submit" value="Enviar" name="botonpag4">
</form>







 