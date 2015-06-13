<section id="formularios">
	<form id="formCrear" class="subtmitForm" action="<?= controles_url ?>f_crear.php" method="post">
		<legend>Crear Documento</legend>
		<div>
			<label>Nombre: </label>
			<input type="text" name="nombre" placeholder="Probando" />
		</div>
		<div>
			<div><label>Tipo de Documento: </label></div>
			<div class="inline-block">
				<label>html</label>
				<input type="radio" checked="checked" value="html" name="tipo">
			</div>
			<div class="inline-block">
				<label>texto</label>
				<input type="radio" value="txt" name="tipo">
			</div>
			<div>
				<div><label>Primer contenido (Opcional)</label></div>
				<div><textarea placeholder="probando" name="contenido"></textarea></div>
			</div>
			<div>
				<input type="submit" value="Crear Documento" />
			</div>
		</div>
	</form>
</section>