(function()
{
	//variables
	var lista = document.getElementById("lista"),
	tareaInput = document.getElementById("tareaInput"),
	bntNuevaTarea = document.getElementById("btn-agregar");

	//funciones
	 function agregarTarea()
	 {
		var tarea = tareaInput.value,
			user_id = $('#user_id').val(),
			nuevaTarea = document.createElement("li"),
			enlace = document.createElement("a"),
			contenido = document.createTextNode(tarea);
			console.log(user_id);
			tareaInput.value = '';
		if(tarea === "")
		{
			console.log("Agrega una tarea valida","por favor");
			//tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
			//tareaInput.className = "error
			return false;
		}
		else
		{
			
				$.ajax({
         	   	url: '../appLista/controlador/agregarTarea.php',
            	method: 'POST',
            	data: { tarea: tarea, user_id: user_id},
            	success: function(msg){
               		if(msg == '1'){
                   	//Error
                   		$('#mensaje').html('La tarea que ingresaste ya se encuentra registrada');
               		}else{
                   //Se registro
                   		console.log(msg);
                   		setTimeout(function(){window.location.href = '';},300);
               		}
            	}
        	});		

			}
		return false;	
	};
	function comprobarInput(){
		tareaInput.className = "";
		tareaInput.setAttribute("placeholder","Agrega tu tarea");
	};


	function eliminarTarea(){
		//var tarea = tareaInput.value;
		var id = $(this).children('a').attr('id');
		console.log(id);
		//var tarea = document.getElementById("tarea");
		this.parentNode.removeChild(this);
		
		$.ajax({
     	   	url: '../appLista/controlador/eliminarTarea.php',
        	method: 'POST',
        	data: { id: id },
        	success: function(msg){
           		console.log(msg);
        	}
    	});		

	
		

	};
	//eventos

	//Agregar Tarea
	bntNuevaTarea.addEventListener("click", agregarTarea);

	//Comprobar input /borrando elementos de la lista
	tareaInput.addEventListener("click", comprobarInput);
	for(var i = 0; i <= lista.children.length-1;i++)
	{
		lista.children[i].addEventListener("click", eliminarTarea);
	}
}());



