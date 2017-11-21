
(function(){

    window.onload = function(){
	var formulario = document.getElementById("formulario");
	var numero = document.getElementById("numero");
	var texto =  document.getElementById("texto");
	var texto2 = document.getElementById("texto2")

	formulario.onsubmit = function(evento) {
	    if(numero.value.trim() == "") {
		evento.preventDefault();
		numero.style.border= "2px solid red";
		numero.title = "El campo no puede ser vacío";
	}

	    if(texto.value.trim() == "") {
		evento.preventDefault();
		texto.style.border= "2px solid red";
		texto.title = "El campo no puede ser vacío";
	}

		if(texto2.value.trim() == "") {
		evento.preventDefault();
		texto2.style.border= "2px solid red";
		texto2.title = "El campo no puede ser vacío";
	    }

	}
}
	   
})();

$("#input-ru").fileinput({
    		uploadUrl: "/file-upload-batch/2",
    		allowedFileExtensions: ["jpg", "png"]
    	});






