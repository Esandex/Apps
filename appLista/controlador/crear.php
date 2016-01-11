<?php

require("../modelo/conexion.php");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$usuario = $_POST['usuario'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

$object = new conexion(); 
$object -> registrar_usuario($id, $nombre, $apellido, $usuario, $pass1, $pass2);
$object -> cerrar();


?>