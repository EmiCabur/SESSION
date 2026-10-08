<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>iniciar session</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
</head>

<body>
	<header>
		<div id="min_header">
			<nav>
				<a href="index.php" title="volver a Home">
					<i class="fas fa-home iconos_menu"></i><span class="texto_menu">HOME</span>
				</a>
				<a href="formulario_usuario.php" title="Agregar noticia" class="active">
					<i class="fas fa-plus iconos_menu"></i>
					<span class="texto_menu">CARGAR NOTICIAS</span>
				</a>
			</nav>
		</div>
	</header>
	<div id="contenedor">
		<section id="formulario_usuario">
			<h2>Completa el formulario para subir noticias</h2>
			<div id="formulario">
				<form action="formulario_noticia.php" method="POST">
					<div>
						<!-- <label for="user">Nombre de usuario:</label> -->
						<input type="text" name="user" placeholder="Nombre de Usuario:">
					</div>
					<div>
						<!-- <label for="password">Contraseña:</label> -->
						<input type="password" name="password" placeholder="Contraseña:">
					</div>
					<div>
						<input type="submit">
					</div>
				</form>
			</div>
		</section>
		<aside>
			<div id="publici_dad">
				<p>publicidad</p>
				<ul>
					<li>
						<div class="img_publicidad"></div>
					</li>
					<li>
						<div class="img_publicidad"></div>
					</li>
					<li>
						<div class="img_publicidad"></div>
					</li>
					<li>
						<div class="img_publicidad"></div>
					</li>
				</ul>
			</div>
		</aside>
	</div>
	<footer>
		<div id="min_footer">
			<p> Todos los derechos reservados. Mel 2026 </p>
		</div>
	</footer>
</body>

</html>