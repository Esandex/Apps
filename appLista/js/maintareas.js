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
		nuevaTarea = document.createElement("li"),
		enlace = document.createElement("a"),
		contenido = document.createTextNode(tarea);

		if(tarea === "")
		{
			console.log("Agrega una tarea valida","por favor");
			//tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
			//tareaInput.className = "error
			return false;
		}
		else
		{
				//Agregamos el contenido al enlace
				enlace.appendChild(contenido);
				//Lee establecemos un atributo href
				enlace.setAttribute("href","#");
				//Agregamos el enlacea (a) a la nueva tarea (li)
				nuevaTarea.appendChild(enlace);
				//Agregamos la nueva tarea a la lista
				lista.appendChild(nuevaTarea);

				tareaInput.value = "";

				for(var i = 0; i <= lista.children.length-1; i++)
				{
					lista.children[i].addEventListener("click", function(){
					this.parentNode.removeChild(this);
					});	
				}

				$.ajax({
         	   	url: '../appLista/controlador/agregarTarea.php',
            	method: 'POST',
            	data: { tarea: tarea},
            	success: function(msg){
               		if(msg == '1'){
                   	//Error
                   		$('#mensaje').html('La tarea que ingresaste ya se encuentra registrada');
               		}else{
                   //Se registro
                   $('#mensaje').html(msg);
               		}
            	}
        	});		

			}
	};
	function comprobarInput(){
		tareaInput.className = "";
		tareaInput.setAttribute("placeholder","Agrega tu tarea");
	};
	function eliminarTarea(){
		
		this.parentNode.removeChild(this);

		$.ajax({
         	   	url: '../appLista/controlador/eliminarTarea.php',
            	method: 'POST',
            	data: { titulo: tarea },
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



