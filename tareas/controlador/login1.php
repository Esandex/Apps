<head>
<meta charset="utf-8">
<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Allen Servers LLC.">
<title>Panel | GamesBoom</title>
<link href="http://gamesboom.x10.mx/css/bootstrap.min.css" rel="stylesheet">
<link href="http://gamesboom.x10.mx/css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<?php

session_start();
include("conexion1.php");
if(isset($_POST['user']) && !empty($_POST['user']) &&
	isset($_POST['pin']) && !empty($_POST['pin']))
{
	$con=mysql_connect($host,$user,$pw) or die("problemas con server");
	mysql_select_db($db,$con) or die ("problemas con BD");

	$sel=mysql_query("SELECT USER,PASSWORD FROM users WHERE USER='$_POST[user]'", $con);

	$sesion=mysql_fetch_array($sel);

if($_POST['pin'] == $sesion['PASSWORD']){
		$_SESSION['ses'] = $_POST['user'];
header('Location: /Apps/tareas/controlador/ingresarTarea.php');
}else{
	header('Location: /panel/login/error');
}

}else{
	echo "";
}

?>
<?php
 
if(isset($_SESSION['ses'])){
    header('Location: /Apps/tareas/controlador/ingresarTarea.php');
}
?>

<style>
body {
 background: #CBCBCB;

}
.header{height:490px;background-color:#CBCBCB;background-image:url('http://habbonat.com/wp-content/uploads/2015/10/bns-nadires-kapak.gif'),url('http://hab-blog.weebly.com/uploads/1/2/1/7/12173803/2854935_orig.gif');background-position:center bottom,center bottom;background-repeat:repeat-x,repeat-x;box-shadow:0 5px 9px rgba(0,0,0,0.35);}
</style>
</head>
<body>

<div class="header" style="height:85px">
<center><img src="http://swf.iboom.es:81/resources/images/logo.png"/></center>
</div>
<br>
<div class="container" role="main">
<div class="col-md-4"></div>
<div class="col-md-4">
 
<br><br><br><br><br><br>
<form id="logins" action="" method="post">
<div class="panel panel-default">
<div class="panel-heading"> <b>Ingresar al panel de control</b> </div>
<div class="panel-body">
<link rel="stylesheet" href="https://cdn.axiomer.com/libs/animate/3.2.1/animate.min.css" />

<p></p>
<div class="form-group">
.
<label for="numbers"> Escribe tu usuario de Iboom:</label>
<input type="text" id="user" class="form-control" name="user" required>
<label for="numbers"> Escribe tu contraseña:</label>
<input type="password" id="pin" class="form-control" name="pin" required>
</div>
<div class="form-group"><br>
<center><input type="submit" class="btn btn-primary-red" value="Acceder"></center>

</div>
</div>
</form>
<div id="mensaje">
</div>
</div>
<div class="col-md-4"></div>
</div>  

</body>
</html>