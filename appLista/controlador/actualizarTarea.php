<?php
include('../modelo/conexion.php');
$titulo = $_POST['titulo'];
$tar = $_POST['tar'];
$var = new conexion();
$var->modificarTarea($titulo, $tar);
$var->cerrar();
?>