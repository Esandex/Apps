<?php
include('../modelo/conexion.php');
$tarea = $_POST['tarea'];
$user_id = $_POST['user_id'];

$var = new conexion();
$var->agregarTarea($tarea, $user_id);
$var->cerrar();
?>