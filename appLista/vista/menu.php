<?php
session_start();
if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) { // se modifico la validacion de la sessión
?>
<HTML>
<HEAD>
<TITLE>INICIO</TITLE>
<meta charset = "UTF-8"> 
<LINK REL = "stylesheet" type = "text/css" href = "css/menu.css" > 
<LINK REL = "stylesheet" type = "text/css" href = "css/add_wish.css" > 
</HEAD>
<body><a href ="login.php" class = "dos">Cerrar Sesion...</a>
    <p id ="title">Bienvenido 
    <?php
    echo $_SESSION['nombre'] ;
    echo " " ;
    echo $_SESSION['apellido'];
    ?>
    </p>
<header><div class = "contenedor" id = "uno"> 
			<a href = "adicionar_tarea.php">
			<img class = "icon" src="css/image/agregar.png">
			<p class = "parrafo">Agregar Tarea</p>
		</a>
		</div>
		<div class = "contenedor" id = "dos"> 
			<a href = "borrar.php">
			<img class = "icon"  src = "css/image/eliminar.png" >
			<p class = "parrafo">Eliminar Tarea</p>
		</a>
		</div>
		<div class = "contenedor" id = "tres"> 
			<a href = "editar_tarea.php">
			<img class = "icon" src="css/image/edit.png">
			<p class = "parrafo">Editar Tarea</p>
			</a>
		</div>
		<div class = "contenedor" id = "cuatro"> 
			<a href = "listar_tareas.php">
			<img class = "icon" src="css/image/consult.png">
			<p class = "parrafo">Consultar Tarea</p>
			</a>
		</div>
</header>
</body>
</HTML>
<?php
}else{echo "Debes iniciar sesion antes de acceder a esta pagina"; } ?>