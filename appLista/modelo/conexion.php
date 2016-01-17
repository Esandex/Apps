<?php 
	class conexion{
		private $conexion;
		private $server = "localhost";
		private $usuario =  "root";//"esandex_admin";
		private $pass = "admin";//"w8uiq9da";
		private $db = "apptareas";//"esandex_apptareas";
		private $user;
		private $password;

		public function __construct(){

			$this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

			if($this->conexion->connect_errno){
				die("Fallo al tratar de conectar con MySQL : (".$this->conexion->connect_errno.")");

			}
		}

		public function cerrar(){
			$this->conexion->close();
		}

		public function login($usuario, $pass){

		$this->user = $usuario;
		$this->password = $pass;

		$query = "select 	id, 
							nombre, 
							apellido, 
							usuario, 
							clave, 
							rol_id1 
				  from usuarios 
				  where usuario = '".$this->user."' 
				  and clave = '".$this->password."'";

		$consulta = $this->conexion->query($query);


		$row = mysqli_fetch_array($consulta);


		if($row['rol_id1'] == 1 ){ //administrador

			session_start();

			$_SESSION['validacion'] = 1 ;
			$_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['id'] = $row['id'];

			echo $row['nombre']; 

		}else if($row['rol_id1'] == 2){//operario

			session_start();

			$_SESSION['validacion'] = 1 ;
			$_SESSION['nombre'] = $row['nombre'];
            $_SESSION['apellido'] = $row['apellido'];
            $_SESSION['id'] = $row['id'];

			echo $row['nombre']; 

		}else{

			session_start();

			$_SESSION['validacion'] = 0;

			echo "1";
		}
	}//Hasta aca va el LOGIN 

	function registrar_usuario($id, $nombre, $apellido, $usuario, $pass1, $pass2){

		if($pass1 == $pass2){
			$validacion_pass = true;
		}else{
			$validacion_pass = false;
		}

		if($validacion_pass){
			$consult = $this->conexion->query("select usuario from usuarios where usuario = '".$usuario."' ");

			if (mysqli_num_rows($consult)>0) {
				echo "1";	
					
			}else{
				$this->conexion->query("insert into usuarios values('".$id."', '".$nombre."', '".$apellido."', '".$usuario."', md5('".$pass1."'),2 )");
				session_start();
				$_SESSION['validacion'] = 1 ;
				$_SESSION['nombre']= $nombre;
                $_SESSION['apellido'] = $apellido;
    
                echo 'menu.php';
			}
		}else{
			echo "2";
		}
	}
	
	///AGREGAR Tareas

	public function agregarTarea($tarea){

		//que la tarea no exista
		  session_start();
       $res =  $this->conexion->query("select descripcion, usuarios_id from tareas where descripcion = '".$tarea."' and usuarios_id = '".$_SESSION['id']."' ");
        
        if(mysqli_num_rows($res)>0)
        {
            //Que el deseo existe
            echo '1';
        }else{
            //Registrar el deseo
            $this->conexion->query("insert into tareas(estado, descripcion, usuarios_id) values(1,  '".$tarea."', '".$_SESSION['id']."')");
            echo "Se registro la tarea";
        }

	}

		public function eliminarTarea($id)
		{
			session_start();

			//$res = $this->conexion->query(" select id,COUNT(*) from tareas where id  = '".$id."' and usuarios_id = '".$_SESSION['id']."'");
			
			//Validar si existe la atrea
			$res = $this->conexion->query("select estado, usuarios_id from tareas where id = '".$id."' and usuarios_id = '".$_SESSION['id']."'");
			
			if(mysqli_num_rows($res ) > 0){
				//la tarea existe
				$this->conexion->query("UPDATE tareas set estado = 0 where id=''".$id."'");
				echo "Se elimino la tarea";
			}else{
				//el latarea no existe
				echo "la tarea no existe";
			}


			
		}

		public function modificarTarea($titulo, $tarea){

		//que la tarea no exista
		  session_start();
       $res =  $this->conexion->query("select titulo, usuarios_id from tareas where titulo = '".$titulo."' and usuarios_id = '".$_SESSION['id']."' ");
        
        if(mysqli_num_rows($res)>0)
        {
           //existe
        	$this->conexion->query("UPDATE tareas set descripcion = '".$tarea."' where titulo = '".$titulo."'and usuarios_id='".$_SESSION['id']."'");
           echo "Se actualizo la tarea"; 
        }else{
           echo "1";
        }

		}

		public function listarTareas(){
			//session_start();
			$consulta = $this->conexion->query("select descripcion from tareas where usuarios_id = '".$_SESSION['id']."'");

			while ($row = mysqli_fetch_array($consulta)) {
			
				echo "<li> <a>". $row['descripcion']. "</a> </li>";
			
			}
		}

	}

 ?>