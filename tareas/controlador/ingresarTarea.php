<?php
session_start();
if(isset($_SESSION['ses'])){
	}else{
	header('Location: /Apps/tareas/controlador/login1.php');
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="js/sweetalert-dev.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<link rel="stylesheet"  href="../css/main.css">

	
  
	
	<title>Listado de tareas</title>
</head>
<body>
	<div class="principal">
		<div class="wrap">
			<form action="" class="formulario">
				<input type="text" id="tareaInput" placeholder="Agrega tu tarea">
				<input type="button" class="boton" id="btn-agregar" value="Agregar tarea">
				
			</form> 
		</div>
	</div>
	<div class="tareas">
		<div class="wrap">
			<ul id="lista" class="lista">
				<li><a href="#">Soy la lista uno</a></li>
				<li><a href="#">Soy la lista dos</a></li>
				<li><a href="#">Soy la lista tres</a></li>
			</ul>
		</div>
	</div>
	<script src="../js/main.js"></script>
</body>
</html>
