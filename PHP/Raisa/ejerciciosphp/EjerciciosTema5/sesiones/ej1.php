<?php
session_start(); 
//unset($_SESSION["contador"]);
$fechahora = "Este es el primer acceso";
$contador = 0;
if (isset($_SESSION['fechahora'])/*&&isset($_SESSION['contador'])*/){
    
    $fechahora = $_SESSION['fechahora'];
    $contador = $_SESSION['contador'];
}


date_default_timezone_set('Europe/Paris');


$_SESSION["fechahora"] = date('d/m/Y h:i:s'); // actualiza la variable
$contador++;


$_SESSION["contador"] = $contador; // actualiza la variable 
?>
<HTML>
    <HEAD>
        <TITLE>Uso de sesiones en PHP </TITLE>
    </HEAD>
    <BODY>
    <H3>Fecha y hora actual: <?php echo date('d/m/Y h:i:s') ?></H3><BR><B>
    Contenido de la superglobal $_SESSION</B><BR>
    <?php 
        echo "Identificador de la sesi󮺠" . session_id() . "<BR>";
        echo "Nombre de la sesi󮺠" . session_name() . "<BR>";
        echo "Elemento fechahora: " . $_SESSION['fechahora'] . "<BR>" ;
        echo "Elemento contador: " . $_SESSION['contador'] . "<BR><BR>" ;
        echo "<BR>La ltima vez que accedi󠡠esta p᧩na fue : $fechahora <BR>"; 
        echo "<BR>Cantidad de accesos a esta p᧩na  : $contador <BR>"; 
    ?> 
    </BODY>
</HTML>