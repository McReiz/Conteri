<?php
$directorio = opendir(archivos); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (!is_dir($archivo))//verificamos si es o no un directorio
    {
	$trozos = explode(".", $archivo); 
	$extension = end($trozos);
		($extension == ".html") ? $tipo = "html" : $tipo = "texto";
		if($extension == "html")
		{
			$img = vista_url.'/img/archivo-html.svg';
		}
		else 
		{
			$img = vista_url.'/img/archivo-texto.svg';
		}
    ?>

    	<article data-tipo-archivo="<?=$extension?>" data-archivo-id="<?=$archivo?>">
				<input type="checkbox" checked="cheked" />
				<img src="<?=$img?>">
				<div>
					<input type="text" value="<?=$archivo?>" />
				</div>
			</article>
    <?php 
    }
    
}