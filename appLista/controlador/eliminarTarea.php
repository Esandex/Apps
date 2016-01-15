<?php
	include('../modelo/conexion.php');
	$titulo = $_POST['titulo'];
	$var = new conexion();
	$var->eliminarTarea($titulo);
	$var->cerrar();
?>