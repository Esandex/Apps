$(document).on('ready', inicio);
function inicio()
{	

	$('.titulo_galeria').on('click',mostrarGaleria);	
	$('.cerrar').on('click',cerrarGaleria);	
}
	function cerrarGaleria(){
	    $('.galeria_miniaturas').css('display','none');  
	}

	function mostrarGaleria(){
	    $('.galeria_miniaturas').css('display','block');  
	}

	

	