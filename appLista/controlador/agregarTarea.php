<?php
include('../modelo/conexion.php');
$tarea = $_POST['tarea'];

$var = new conexion();
$var->agregarTarea($tarea);
$var->cerrar();
?>