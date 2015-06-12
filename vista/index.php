<html lang="es">
	<?php include(vista.'function.php') ?>
	<?php include(vista.'head.php') ?>
<body>
	<?php include(vista."header.php") ?>
	<?php include(vista."formularios.php") ?>
	<?php include(vista.'menu.php') ?>
	<section id="archivos">
		<div class="arc">
			<?php include(controles."f_listar.php"); ?>
		</div>
	</section>
	<?php include(vista."footer.php"); ?>
</body>
</html>