<?php
session_start();
echo<<<zanna
<form action="productos3.php" method="post">
    Tipo de entrega:
    <br><br>
    <input type="radio" name="entrega" value="domicilio"> A domicilio
    <br><br>
    <input type="radio" name="entrega" value="tienda"> Recoger en tienda
    <br><br>
    Forma de pago:
    <br><br>
    <input type="radio" name="pago" value="contrareembolso"> Contra reembolso
    <br><br>
    <input type="radio" name="pago" value="transferencia"> Transferencia
    <br><br>
    <input type="submit" name="continuar" value="CONTINUAR">
</form>
zanna;
if(isset($_POST['nombre'])&&isset($_POST['apellido'])){
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellido'];
}    
?>