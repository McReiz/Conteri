$(document).on("ready",function()
{  
// Ojos que no leen, corazón que no siente...

		
		$(document).bind("contextmenu",function(event)
		{
			return false;
			//impedir click derecho
		});

		function ocultarMenu(){if($("#menu").is(":visible")){
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
				$("#formCrear").show();
			}
			alert("funca");
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
});	