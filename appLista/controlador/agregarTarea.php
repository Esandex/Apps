<?php
include('../modelo/conexion.php');
$titulo = $_POST['titulo'];
$tar = $_POST['tar'];

$var = new conexion();
$var->agregarTarea($titulo, $tar);
$var->cerrar();
?>