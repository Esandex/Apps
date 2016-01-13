<?php
include('../modelo/conexion.php');
$des = $_POST['des'];

$var = new conexion();
$var->agregarDeseo($des);
$var->cerrar();
?>