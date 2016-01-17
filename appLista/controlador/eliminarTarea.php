<?php
	include('../modelo/conexion.php');
	$id = $_POST['id'];
	$var = new conexion();
	$var->eliminarTarea($id);
	$var->cerrar();
?>