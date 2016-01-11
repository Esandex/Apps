<?php 
	session_start();
	session_destroy();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<body>
		
		<div class="contenedor" id="formulario">
			
				<div class="icono"></div>
				<h1>Bienvenido</h1>			
				<form action= "../controlador/login.php" method="POST">
				
								<input type="text" class="usuario" placeholder = "Usuario" title = "Escribe un usuario" required>
								<input type="password" class="clave" name = "pass" placeholder = "Usuario" title = "Escribe una contraseña" required>
								<input type="button" id="envia" Value="Ingresar"> 
								<input type="reset" value="Limpiar">
							<p id="mensaje" style="color:red;"></p>
							<p>
								<a href="crear.html">
									Crear Cuenta
								</a>
							</p>
				</form>

		</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/main.js"></script>
</html>