function ocultarMenu(){
	if($("#menu").is(":visible")){
		$("#menu").hide();
	}
};
function clickderecho(){

	$("#archivos").on("mousedown",function(event){
		switch(event.which){
			case 1:

			ocultarMenu();
			//quitar el borde con click izquierdo fuera de los archivos
			break;
		}
	});

	$('article').on("mousedown",function(event){
		//Capturar click derecho y id del archivo seleccionado
		id = $(this).attr("data-archivo-id");
		dTop = $(this).offset().top + 20;
		dLeft = $(this).offset().left + 100;
		switch (event.which) {
			case 1:
				if(!$("article").hasClass("marcado")){
					$(this).addClass("marcado");
				}else{
					$("article").removeClass("marcado");
					$(this).addClass("marcado");
				}
			break;
			case 3:
				ocultarMenu(); //Ambos para que funciona
				// $("#menu").hide(); // Ambos para que funcione , para que no se desplaze sino que se oculte
				if(!$("article").hasClass("marcado")){
					$(this).addClass("marcado");
				}else {
					$("article").removeClass("marcado");
					$(this).addClass("marcado");
				}
				$("#menu").css({left:dLeft, top: dTop});
				id = $(this).attr("data-archivo-id");
				$("#menu").show();
				$("button").attr("data-form","modificar").attr("data-archivo-id",id);
			break;
		}
	});
}
function modificar(id)
{
	// para especial para los formularios
	$.ajax({
		url: "controles/f_modificar.php",
		type: 'POST',
		data: id,
		success: function (mensaje) {
			$("#modificar").remove(); //para que no quede el section #modificar anterior cada vez que se modifica un archivo
			$("body").append(mensaje);
		}
	});
}
function formSubmit(event){
	// para especial para los formularios
	event.preventDefault();
	var url = $(this).attr('action');
	var dataVa = $(this).serialize();
	$.ajax({
		url: url,
		type: 'POST',
		data: dataVa,
		success: function (mensaje) {
			$('#formularios').hide(500);
			$(".notify").html(mensaje).fadeIn(3000).fadeOut(5000);
			var vericidad = $('#resultado').attr('class');
			
			if(vericidad == "success"){
				setTimeout(function(){
					$('#archivos').load('index.php #archivos .arc', function(){
						clickderecho();
					});
				},500);
			}
			vericidad.remove();
			$('notify').removeAttr('style');
		}
	});
	return false;
}
function droparch(){
	//$('.subir-archivo').dropzone({url: "controles/f_subirarchivo.php", paramName: "filename"});

}
$(document).on("ready",function()
{  
// Ojos que no leen, corazón que no siente... (deja de poner ridiculeses en los comentarios xD)

	$("button").on("click",function(event){
		event.preventDefault();
		var data = $(this).attr("data-form"); //tomo el valor del atrributa data-form
		var id   = $(this).attr("data-archivo-id");
		var formulario = $("."+ data); // lo convierto en un selector "class" por asi decirlo
		if(data == "modificar"){modificar(id);}
		formulario.show(100); // muestrame el "class" almacenado en la var formulario
		ocultarMenu();
	}); 
	$(document).bind("contextmenu",function(event)
	{
		// return false;
		//impedir click derecho
	});

	
	// function marcar()
	// {
	// 	if(!$("article").hasClass("marcado"))
	// 				{
	// 					$(this).addClass("marcado");

	// 				}else 
	// 				{
	// 					$("article").removeClass("marcado");
	// 					$(this).addClass("marcado");
	// 				}
	// }
		
	$('.subtmitForm').on("submit", formSubmit);
	droparch();
	clickderecho();
});	