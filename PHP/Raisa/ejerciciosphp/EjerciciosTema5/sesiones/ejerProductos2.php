<?php

session_start();

$_SESSION['nom'] = $_POST['nombre'];
$_SESSION['apel'] = $_POST['apellido'];

echo<<<formulario

    <form action="ejerProductos3.php" method="POST">
        <div style="position:absolute;">
            Tipo entrega:
            </br>
            <input type="radio" name="entrega" value="A domicilio">A domicilio
            </br>
            <input type="radio" name="entrega" value="Recoger en tienda">Recoger en tienda
        </div>
        
        <div style="position:absolute; left: 160;">
            Pago:
            </br>
            <input type="radio" name="pago" value="Contra reembolso">Contra reembolso
            </br>
            <input type="radio" name="pago" value="Transferencia">Transferencia
        </div>
        
        <input type="submit" style="position:absolute; top: 90;" value="Continuar"/>

    </form>
formulario;

?>

