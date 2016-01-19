<?php
	session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) { // se modifico la validacion de la sessión
	include('modelo/conexion.php');
	$var = new conexion();
?>	 
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<link rel="stylesheet"  href="css/main.css">
	<title>Listado de tareas</title>
</head>
<body>
	<div class="principal">
		
		<p class ="title">Bienvenido
			<?php echo $_SESSION['firtsname']; ?>
		</p>
	
		<div class="wrap">
			<form  class="formulario" method="post">
				<input type="hidden" id="user_id" value="<?= $_SESSION['id'] ?>">
				<input type="text" id="tareaInput" placeholder="Agrega tu tarea">
				<input type="submit" class="boton" id="btn-agregar" value="Agregar tarea">				
			</form> 
		</div>
	</div>
	<div class="tareas">
		<div class="wrap">
			<ul id="lista" class="lista">

			<?php
				$var->listarTareas();
				$var->cerrar();
			?>
			
			</ul>
		</div>
	</div>
	<a href ="vista/login.php" class="cerrar-sesion">
		          Cerrar Sesión <div class="icon-switch"></div>
	</a>
	<script src="js/jquery.js"></script>
	<script src="js/maintareas.js"></script>
</body>
</html>
<?php
}else{
    header("Location: vista/login.php");
}
?>



