<?php
session_start();
echo<<<zanna
<form action="encerado2.php" method="post">
    Nombre: <input type="text" name="nombre">
    <br>
    Edad: <input type="number" name="edad">
    <br>
    <input type="submit" value="Enviar" name="enviar">
</form>
zanna;
?>