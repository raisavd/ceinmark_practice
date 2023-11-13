<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    
        <form action="pagina3bsd.php" method="post">
        Tipo de entrega:<br>
        <input type="radio" name="entrega"  value="domicilio" />Domicilio
        <br>
        <input type="radio" name="entrega"  value="tienda" />Recoger Tienda<br>
        <br>
        Forma de pago: <br>
        <input type="radio" name="formapago" value="rembolso" />Contra rembolso
        <br>
        <input type="radio" name="formapago" value="transferencia" />Trasnfernecia
        <br>
        <input type="submit" value="Continuar" name="botoncontinuar">
     </form>
<?php
session_start();
$_SESSION['nombre'] = $_POST['nombre'];//lo pasamos a en sesion
$_SESSION['apellido'] = $_POST['apellido'];

?>

</body>
</html>