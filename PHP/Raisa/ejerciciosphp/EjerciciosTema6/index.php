<?php
require_once('claseCodificar/conectar.php');
require_once('claseCodificar/estudiantes.php');
require('claseCodificar/vista.php');

$estu = new Estudiantes();
$v = $estu -> get_estudiante();

$vis = new Vista();
$vis -> visualizar($v);
?>