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
						
				<form action= "../controlador/login.php" name="valida" method="POST" enctype="">

								<h1>Bienvenido</h1>	
								<div class="grupo">
									<label for="name">Usuario</label>
									<input type="text" class="usuario" placeholder = "Usuario" title = "Escribe un usuario" required>	
								</div>

								<div class="grupo">
									<label for="email">Contraseña</label>
									<input type="password" class="clave" name = "pass" placeholder = "Contraseña" title = "Escribe una contraseña" required>
								</div>
								
								<button class="button" type="button" name="enviar" id="envia">Ingresar</button> 
								<p id="mensaje" style="color:red;"></p>
							
				</form>

		</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/main.js"></script>
</html>