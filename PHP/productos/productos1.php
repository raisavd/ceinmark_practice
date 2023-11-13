<?php
session_start();
echo<<<zanna
<form action="productos2.php" method="post">
    Nombre: <input type="text" name="nombre" required>
    <br><br>
    Apellidos: <input type="text" name="apellido" required>
    <br><br>
    <input type="submit" name="comprar" value="COMPRAR">
    <input type="reset" name="reset" value="BORRAR">
</form>
zanna;
?>