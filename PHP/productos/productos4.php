<?php
session_start();
$fecha=date("d-m-y");
echo "Nombre y apellidos: ".$_SESSION['nombre']." ".$_SESSION['apellido'];
echo "<br><br>";
echo "Gracias por confiar en nosotros";
echo "<br><br>";
echo "Has comprado :";
echo "<br><br>";
echo "PORDUCTO      PRECIO      CANTIDAD";
echo "<br><br>";
if(!empty($_POST['cantSudadera'])){
    echo " Sudadera     40      ".$_POST['cantSudadera'];
    echo "<br><br>";
}
if(!empty($_POST['cantChaqueta'])){
    echo " Chaqueta     60      ".$_POST['cantChaqueta'];
    echo "<br><br>";
}
if(!empty($_POST['cantZapatos'])){
    echo " Zapatos     50      ".$_POST['cantZapatos'];
    echo "<br><br>";
}
if(!empty($_POST['cantJersey'])){
    echo " Jersey     50      ".$_POST['cantJersey'];
    echo "<br><br>";
}
if(!empty($_POST['cantPantalon'])){
    echo " Pantalon     40      ".$_POST['cantPantalon'];
    echo "<br><br>";
}
echo "<br><br>";
echo "Importe total ". "€";
echo "<br><br>";
echo "El pedido estara para el dia: ".date("d-m-y",strtotime($fecha."+1week"));
echo "<br><br>";
echo "Sera entregado : ".$_SESSION['entrega'];
echo "<br><br>";
echo "La forma de pago : ".$_SESSION['pago'];
?>