<?php
session_start();
include("conexion1.php");
?>
Hola, <?php echo $_SESSION['ses']; ?>
<a href="/Apps/tareas/controlador/salir.php">Salir</a>
<?php
if(isset($_SESSION['ses'])){
	}else{
	header('Location: /Apps/tareas/controlador/login1.php');
}
?>
