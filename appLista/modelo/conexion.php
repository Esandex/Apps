<?php 
	class conexion{
		private $conexion;
		private $server = "esandex.com";
		private $usuario =  "esandex_admin";
		private $pass = "w8uiq9da";
		private $db = "esandex_desarrollo";
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

			$sql = "SELECT 	* 
					  FROM users 
					  WHERE USER = '{$this->user}'
					  	AND PASS = '{$this->password}'";

			$consulta = $this->conexion->query($sql) or die($this->conexion->error);

			$row = mysqli_fetch_array($consulta);



		if($row['PASS'] == $this->password ){ //administrador

			session_start();
			$_SESSION['validacion'] = 1 ;
            $_SESSION['id'] = $row['USER_ID'];
            $_SESSION['firtsname'] = $row['FIRSTNAME'];
			echo $row['FIRSTNAME']; 

		}else{

			session_start();
			$_SESSION['validacion'] = 0;
			echo "error";
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

	public function agregarTarea($tarea, $user_id){
	    
	    //Registrar el deseo
	    $sql = "INSERT INTO tareas	(ESTADO, 
	    							 DESCRIPCION, 
	    							 USER_ID) 
				VALUES (1,  
						'{$tarea}', 
						'{$user_id}')";
	    $this->conexion->query($sql);
	    echo "Se registro la tarea del usuario nro: " . $user_id;
	}

		public function eliminarTarea($id)
		{
			$sql = "UPDATE 	tareas 
					SET 	ESTADO = 0 
					WHERE 	ID_TAREA = '{$id}'";
			$result = $this->conexion->query($sql) or die ($this->conexion->error);
			echo "Se elimino la tarea nro: ". $id . $result;			
		}

		public function modificarTarea($id){

			echo "recibi el id: ".$id;

		}

		public function listarTareas(){
			//session_start();
			$sql = "SELECT 	*
					FROM tareas
					WHERE USER_ID = '{$_SESSION['id']}'
						AND estado > 0";
			$consulta = $this->conexion->query($sql);

			while ($row = mysqli_fetch_array($consulta)) {
			
				echo "<li><a id='{$row['ID_TAREA']}'>{$row['DESCRIPCION']}</a> </li>";
			
			}
		}

	}

 ?>