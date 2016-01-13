<?php
session_start();

session_destroy();

header('Location: /Apps/tareas/controlador/login1.php');
?>