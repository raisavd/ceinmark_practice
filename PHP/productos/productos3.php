<?php
session_start();
$fecha=date("d-m-y");
echo "Bienvenido ".$_SESSION['nombre']." ".$fecha;
echo "<br><br>";
echo<<<zanna
<form action="productos4.php" method="post">
    Productos       Precio      Cantidad
    <br><br>
    Sudadera        40          <input type="number" name="cantSudadera">
    <br><br>
    Chaqueta        60          <input type="number" name="cantChaqueta">
    <br><br>
    Zapatos         50          <input type="number" name="cantZapatos">
    <br><br>
    Jersey          50          <input type="number" name="cantJersey">
    <br><br>
    Pantalon        40          <input type="number" name="cantPantalon">
    <br><br>
    <input type="submit" name="enviar" value="ENVIAR">
</form>
zanna;
if(isset($_POST['entrega'])&&isset($_POST['pago'])){
    $_SESSION['entrega'] = $_POST['entrega'];
    $_SESSION['pago'] = $_POST['pago'];
}  
?>