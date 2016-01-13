<?php
	include("../modelo/conexion.php");

	$user = $_POST['usuario'];
	$pass = $_POST['pass'];

	$usuarios = new conexion;
	$usuarios->login($user, $pass);
	$usuarios->cerrar();
?>


