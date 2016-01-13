<?php
	session_start();
	if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) { // se modifico la validacion de la sessión
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
			<a href ="vista/login.php" class="cerrar-sesion">Cerrar Sesion</a>
			<p class ="title">Bienvenido
				<?php
				    echo $_SESSION['nombre'] ;
				    echo " " ;
				    echo $_SESSION['apellido'];
			    ?>
    		</p>
	
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
			
			</ul>
		</div>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/maintareas.js"></script>
</body>
</html>
<?php
}else{
    echo"Debes iniciar sesion antes de acceder a esta página"; 
    header("Location: vista/login.php");
}
?>



