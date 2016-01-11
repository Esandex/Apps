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
	<title>Inicio</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
		<div id="formulario">
			<h1>Iniciar sesión</h1>
			<br><br>
			<div class="login">
				<form action= "../controlador/login.php" method="POST">
					<fieldset>
						<h2>Login</h2>

							<p>
								<input type="text" class="usuario" placeholder = "Usuario" title = "Escribe un usuario" required>
							</p>
							<p>
								<input type="password" class="clave" name = "pass" placeholder = "Usuario" title = "Escribe una contraseña" required>

							</p>
							<p>
								<button type="button" id="envia">Ingresar</button> 
								<input type="reset" value="Limpiar">
							</p>

							<p id="mensaje" style="color:red;"></p>
							<p>
								<a href="crear.html">
									Crear Cuenta
								</a>
							</p>
					</fieldset>
				</form>
			</div>
		</div>
</body>
<script src="../js/jquery.js"></script>
<script src="../js/main.js"></script>
</html>