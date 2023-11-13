<?php
require_once('modelo.php');
require_once('modeloProductos.php');
require('vista.php');

$producto = new Productos();
$v = $producto -> get_Productos();
$t = $producto -> get_Tiendas($p);


$vis = new Vista();
$p = $vis -> visualizar($v,$t);
$tp = $producto -> get_Tiendas($p);

?>