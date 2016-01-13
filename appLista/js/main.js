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
