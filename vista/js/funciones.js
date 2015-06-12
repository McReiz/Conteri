
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
					$('#archivos').load('index.php #archivos .arc');
				},500);
				vericidad.remove();
				$('notify').removeAttr('style');
			}
			
		}
	});
	return false;
}
$(document).on("ready",function()
{  
// Ojos que no leen, corazón que no siente... (deja de poner ridiculeses en los comentarios xD)

		
	$(document).bind("contextmenu",function(event)
	{
		return false;
		//impedir click derecho
	});

	function ocultarMenu(){
		if($("#menu").is(":visible")){
			$("#menu").hide();
		}
	};
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
		$("button").on("click",function(){
			id = $(this).attr("id");
			if(id == "crear")
			{
				$("#formularios").show(100);
			}
		});

		$("#archivos").on("mousedown",function(event){
			switch(event.which)
			{
				case 1:

					ocultarMenu();
					
					//quitar el borde con click izquierdo fuera de los archivos
					

				break;
			}
		});

		$('article').on("mousedown",function(event)
		{
			//Capturar click derecho y id del archivo seleccionado
    		id = $(this).attr("data-archivo-id");
    		dTop = $(this).offset().top + 20;
			dLeft = $(this).offset().left + 100;
    		switch (event.which) 
    		{
    			case 1:

if(!$("article").hasClass("marcado"))
					{
						$(this).addClass("marcado");

					}else 
					{
						$("article").removeClass("marcado");
						$(this).addClass("marcado");
					}    			      
    			break;
        		case 3:
					ocultarMenu(); //Ambos para que funciona
					// $("#menu").hide(); // Ambos para que funcione , para que no se desplaze sino que se oculte
					if(!$("article").hasClass("marcado"))
					{
						$(this).addClass("marcado");

					}else 
					{
						$("article").removeClass("marcado");
						$(this).addClass("marcado");
					}
					$("#menu").css({left:dLeft, top: dTop});
					$("#menu").show();
            	break;
    		}
		});
	$('.subtmitForm').on("submit", formSubmit);
});	