<?php
session_start();
if(isset ($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Tareas</title>
        <link rel="stylesheet" type ="text/css" href="css/add_wish.css">
        <style type="text/css">
        body{
            background-color: grey;
        }
        </style>
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>       
    <div class ="maik">  
        <form name="deseos_agregar">
            <h3 class = "title">Ingresa Tu Tarea...</h3>
            <p>Titulo De la tarea</p><input title = "Se necesita el titulo del deseo" type = "text" id ="titulo" required>
                <div><textarea name ="deseo" rows="14" cols="50"  id="area" title ="Ingresa el deseo " required ></textarea></div>
                <p id="mensaje" style="color: white;"></p>
                <input type="reset" value="Limpiar" class ="uno"><button type="button" id= "Agregar" class="uno "> Agregar Deseo</button>
        </form>     
    </div>  
    </center>
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
    </body>
</html>
<?php
}else{
    echo"Debes iniciar sesion antes de acceder a esta página"; 
}
?>
