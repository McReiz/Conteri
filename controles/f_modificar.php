<?php
	include('../configuracion/config.php');

	if($_GET)
	{
		$id = $_GET["id"];
	}
?>
<section id="modificar" data-archivo-id="<?= $id ?>">
	<?php 
		if(file_exists(archivos.$id))
		{
			$contador = 0;
			$archivo = fopen(archivos.$id,"r+");
			while(!feof($archivo))
			{
				$contador++;
			?>
				<section id="modificar-archivo">
					<h3><?= $id; ?></h3>
					<form>
						<div id="numero">
							<?=$contador?><br />
						</div>
						<textarea name="archivo-modificado"><?= nl2br(fgets($archivo)). "<br />"?></textarea>
						<div>
							<input type="submit" value="Guardar cambios">
						</div>
					</form>
				</section>
			<?php
			}
			fclose($archivo);
		}
	?>
</section>