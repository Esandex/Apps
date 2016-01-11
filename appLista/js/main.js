$(document).ready(function(){

	$('#envia').click(function(){

		var user = $('.usuario').val();
		var pass = $('.clave').val();

		if (user !='' && pass !='') {

			$.ajax({
				url: '../controlador/login.php',
				method: 'POST',
				data:{usuario: user, pass: pass},
				success: function(msg){
					if (msg == '1'){
						$('#mensaje').html('datos incorrectos');
					}else{
						window.location = msg;
					}
				}
			});


		}else{
			$('#mensaje').html('Ingrese los datos');
		}

	});

});


//Registro de usuario

$(document).ready(function(){

	$('#registrar').click(function(){
		var id       = $("#id").val();
		var nombre   = $("#nombre").val();
		var apellido = $("#apellido").val();
		var usuario  = $("#usuario").val();
		var pass1 	 = $("#pass1").val();
		var pass2 	 = $("#pass2").val();

		if (id != '' && nombre != '' && apellido != '' && usuario != '' && pass1 != '' && pass2 != ''){

			$.ajax({
				url: '../controlador/crear.php',
				method: 'POST',
				data: {id: id, nombre: nombre, apellido: apellido, usuario: usuario, pass1: pass1, pass2: pass2},
				success: function(msg){

					if (msg == '1') {
						$('#mensaje').html('El usuario ingresado ya existe');
					}else if(msg == '2'){
						$('#mensaje').html('Las contraseñas ingresadas no coinciden');
					}else{
						window.location = msg;
					}
				}
					});

		 }else{
		 	$('#mensaje').html('Ingrese los datos');
		 }
	});

});

//agregar
$('#Agregar').click(function(){
	var titulo = $('#titulo').val();
	var tar = $('#area').val();

	if(titulo != '' && tar != ''){
		//los campos estan llenos
		$('#mensaje').html('campos llenos');
		$.ajax({
			url: '../controlador/agregarTarea.php',
			method: 'POST',
			data: {titulo: titulo, tar: tar},
			success: function(msg){
				//$('#mensaje').html(msg);
				if (msg == 1) {
					//error
					$('#mensaje').html("La tarea que ingresaste ya se encuentra registrada");

				}else{
					//se registro
			   		$('#mensaje').html(msg);

				}
			}

		});

	}else{
		//algun campo esta vacio
		$('#mensaje').html("ingrese todos los campos");
	}
});




//eliminar

$('#eliminar').click(function(){
	var titulo = $('#jax').val();

	if(titulo != ''){
		//el campo esta lleno
		$('#mensaje').html('');

		$.ajax({
			url: '../controlador/eliminar.php',
			method: 'POST',
			data: {titulo: titulo},
			success: function(msg){
				if(msg == 1){
					//error
					$('#mensaje').html('La tarea que ingresaste no existe');
				}else{
					//se elimino
					$('#mensaje').html(msg);
				}
			}

		});

	}else{
		//el campo esta vacio
		$('#mensaje').html('Por favor ingrese un titulo');
	}
});



//click actualizar

$('#actualizar').click(function(){
	var titulo = $('#jinx').val();
	var tar = $('#area').val();

	if(titulo != '' && tar != ''){
		$.ajax({
			url: '../controlador/actualizarTarea.php',
			method: 'POST',
			data: {titulo: titulo, tar: tar},
			success: function(msg){
				//$('#mensaje').html(msg);
				if (msg == 1) {
					//error
					$('#mensaje').html("La tarea  que ingresaste no existe");

				}else{
					//se registro
			   		$('#mensaje').html(msg);

				}
			}

		});

	}else{
		//algun campo esta vacio
		$('#mensaje').html("ingrese todos los campos");
	}
});