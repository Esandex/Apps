(function()
{
	//variables
	var lista = document.getElementById("lista"),
	tareaInput = document.getElementById("tareaInput"),
	bntNuevaTarea = document.getElementById("btn-agregar");

	//funciones
	var agregarTarea = function()
	{
		var tarea = tareaInput.value, 
		nuevaTarea = document.createElement("li"),
		enlace = document.createElement("a"),
		contenido = document.createTextNode(tarea);

		if(tarea === "")
		{
			tareaInput.setAttribute("placeholder", "Agrega una tarea valida");
			tareaInput.className = "error";
			return false;
		}

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
	};
	var comprobarInput  = function(){
		tareaInput.className = "";
		tareaInput.setAttribute("placeholder","Agrega tu tarea");
	};
	var eliminarTarea = function(){
		this.parentNode.removeChild(this);
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