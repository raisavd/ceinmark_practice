<?php
session_start();
$_SESSION['zapatillas'] = $_POST['zapatillas'];
$_SESSION['calcetines'] = $_POST['calcetines'];
$_SESSION['camisetas'] = $_POST['camisetas'];
$_SESSION['sudaderas'] = $_POST['sudaderas'];
$_SESSION['gorros'] = $_POST['gorros'];

var_dump($_POST);

echo "PEDIDO";
echo "<br>";
if (!$_POST['zapatillas']==""){
    echo " Zapatillas     20€            ";      
    echo "      Ha escogido la cantidad ".$_POST['zapatillas']." zapatillas";
    echo "<br>";
}
if (!$_POST['calcetines']==""){
echo "Calcetines       5€ ";   
echo "      Ha escogido la cantidad ".$_POST['calcetines']." calcetines";
echo "<br>";  
}
if (!$_POST['camisetas']==""){
    echo " Camisetas       25€ ";  
    echo "      Ha escogido la cantidad ".$_POST['camisetas']." camisetas";
    echo "<br>";   
}
if (!$_POST['sudaderas']==""){
    echo "Sudaderas       30€ ";  
    echo "      Ha escogido la cantidad ".$_POST['sudaderas']." sudaderas";
    echo "<br>";    
}
if (!$_POST['gorros']==""){
    echo "Gorros          10€";
    echo "      Ha escogido la cantidad ".$_POST['gorros']." gorros";
    echo "<br>";         
}



/*
//solo lo pedido
if (!strlen($_POST['zapatillas'])) {
    echo "El campo  zapatillas no está vacío.Ha escogido la cantida de ".$_POST['zapatillas'];
}
echo "<br>";
if (!empty($_POST['calcetines'])) {
    echo "El campo  calcetines no está vacío"; 
}
echo "<br>";
if (!empty($_POST['camisetas'])) {
    echo "El campo  camisetas  no está vacío"; 
}
echo "<br>";
if (!empty($_POST['sudaderas'])) {
    echo "El campo sudaderas no está vacío"; 
}
echo "<br>";
if (!empty($_POST['gorros'])) {
    echo "El campo  gorrros no está vacío"; 
  }*/

//importe 
$totalzapatillas=(int)$_POST['zapatillas'] *20;
$totalcalcetines=(int)$_POST['calcetines'] *5;
$totalcamisetas=(int)$_POST['camisetas'] *25;
$totalsudaderas=(int)$_POST['sudaderas'] *30;
$totalgorros=(int)$_POST['gorros'] *10;
$importetotal=(int)$totalzapatillas+$totalcamisetas+$totalgorros+$totalsudaderas+$totalcalcetines;

echo "<br>";
echo "EL importe total es ".$importetotal. " €";
echo "<br>";








$fechaactual=date("d-m-y");


echo "El pedido estara para el dia: ".date("d-m-y",strtotime($fechaactual."+1week"));
echo "<br>";

/*echo "".$_SESSION['zapatillas'];*/

echo "Bienvenido ".$_SESSION['nombre']."    ".$_SESSION['apellido'];
echo "<br>";
echo "La entrega sera  en  ".$_SESSION['entrega'];
echo "<br>";
echo "La forma de pago sera en   ".$_SESSION['formapago'];
echo "<br>";
//echo $totalzapatillas;



?>