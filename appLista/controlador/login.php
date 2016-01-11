<?php
	include("../modelo/conexion.php");

	$user = $_POST['usuario'];
	$pass = $_POST['pass'];

	$apptareas = new conexion;
	$apptareas->login($user, $pass);
	$apptareas->cerrar();
?>