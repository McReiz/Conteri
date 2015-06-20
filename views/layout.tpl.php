<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<link rel="stylesheet" href="<?= CSS ?>" />
</head>
<body>
	<header>
		<div id="logo">
			<h1>Liceo Cabo Santa María <i id="creditos">plataforma realizada por Rafael Conteri</i></h1>
		</div>
		<nav>
			<ul>
				<li><a href="#contend-home-register-login" id="acceder">Acceder</a></li>
				<li><a href="/profesores/">Material</a></li>
			</ul>
		</nav>
		</header>
	<?= $tpl_content ?>
	<footer>Footer</footer>
</body>
</html>
