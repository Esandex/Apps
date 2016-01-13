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
						$('#mensaje').html('Datos incorrectos');
					}else{
						$('#mensaje').html('Bienvenido ' + msg);
						setTimeout(function(){window.location.href = '../';},3000);
					}
				}
			});


		}else{
			$('#mensaje').html('Ingrese los datos');
		}
		return false;
	});

});


