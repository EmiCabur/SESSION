<?php
function esc($value) {
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}

$archivo = __DIR__ . '/noticias.json';
$noticias = [];

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    $noticias = json_decode($contenido, true) ?: [];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Noticias</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">

	<link rel="shortcut icon" href="http://www.pngall.com/wp-content/uploads/2016/05/Newspaper-Free-Download-PNG.png">
</head>

<body>
	<header>
		<div id="min_header">
			<nav>
				<a href="index.php" title="volver a Home" class="active">
					<i class="fas fa-home iconos_menu"></i><span class="texto_menu">HOME</span>
				</a>
				<a href="formulario_usuario.php" title="Agregar noticia">
					<i class="fas fa-plus iconos_menu"></i>
					<span class="texto_menu">CARGAR NOTICIAS</span>
				</a>
			</nav>
		</div>
	</header>
	<div id="contenedor">
		<section id="noticias">
			<h2>Noticias Nuevas</h2>
			<div class="noticias">
				<?php if (empty($noticias)): ?>
					<p>No hay noticias publicadas todavía. ¡Sé el primero en publicar!</p>
				<?php else: ?>
					<?php foreach ($noticias as $n): ?>
				<div class="noticia">
					<div id="img" title="<?= esc($n['foto'] ?? '') ?>"></div>
					<div id="texto">
						<p id="titulo"><?= esc($n['titulo'] ?? '') ?></p>
						<p id="copete"><?= esc($n['copete'] ?? '') ?></p>
						
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
					<?php endforeach; ?>
				<?php endif; ?>
			</div>
			<h2>Por si te lo perdiste</h2>
			<div class="noticias">
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
			</div>
			<h2>Deportes</h2>
			<div class="noticias">
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
				<div class="noticia">
					<div id="img" title="foto_noticia"></div>
					<div id="texto">
						<p id="titulo">Lorem ipsum dolor</p>
						<p id="copete">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<a href="noticia.php" class="link_noticia">Ver mas</a>
				</div>
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

</body>

</html>
<footer>
	<div id="min_footer">
		<p> Todos los derechos reservados. Mel 2026 </p>
	</div>

</footer>
</body>

</html>
