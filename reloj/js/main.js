$(document).on('ready', inicio);
function inicio()
{	
	$('.boton').on('click', menu);	
}
	
function menu(){
	var appMenu = $('.appMenu')
	var distancia =  appMenu.css('right');

	if(distancia == '0px'){
		console.log('abierto');
		$('.appMenu').css('right', '-150px');	
		$('.appMenu .header .boton').addClass('menu');
		$('.appMenu .header .boton').removeClass('cerrar');
	}else{
		console.log('cerrado');
		$('.appMenu').css('right', '0px');	
		$('.appMenu .header .boton').addClass('cerrar');
		$('.appMenu .header .boton').removeClass('menu');
	}
}

function cambiarImg(obj){
	var objeto = obj;
	
	var css = {
		'background-image': 'url(img/' + objeto + ')'
	
	}

	localStorage.setItem('imagen',objeto);
	var imgGuardada = localStorage.getItem(objeto);

	console.log(imgGuardada);

	//console.log(css);

	$('body').css(css);

	//console.log(objeto);
}


/*$(document).ready(function() {

	var guardar = document.getElementById("guardar");
		if (localStorage.setItem('guardar',guardar) = true) 
		{
			
		}
		else
		{

		}
   			localStorage.setItem('css',css);
   			var imagenGuardada = localStorage.getItem('css');
	});

*/
