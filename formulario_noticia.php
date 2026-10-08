<?php
$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titulo'])) {
    $titulo = trim($_POST['titulo'] ?? '');
    $foto = trim($_POST['foto'] ?? '');
    $copete = trim($_POST['copete'] ?? '');

    if ($titulo !== '' && $foto !== '' && $copete !== '') {
        $nueva = [
            'titulo' => $titulo,
            'foto' => $foto,
            'copete' => $copete,
            'fecha' => date('d/m/Y H:i:s')
        ];

        $archivo = __DIR__ . '/noticias.json';
        $noticias = [];
        
		if (file_exists($archivo)) {
            $contenido = file_get_contents($archivo);
			$noticiasGuardadas = json_decode($contenido, true);
			if (!is_array($noticiasGuardadas)) {
				$mensaje = 'No se pudieron leer las noticias existentes. Revisa noticias.json.';
			} else {
				$noticias = $noticiasGuardadas;
			}
        }

		if ($mensaje === '') {
			array_unshift($noticias, $nueva);
			$contenidoJson = json_encode($noticias, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

			if ($contenidoJson === false) {
				$mensaje = 'No se pudo preparar la noticia para guardarla. Revisa los caracteres ingresados.';
			} elseif (file_put_contents($archivo, $contenidoJson, LOCK_EX) === false) {
				$mensaje = 'No se pudo guardar la noticia. Revisa los permisos de la carpeta.';
			} else {
				header('Location: index.php');
				exit;
			}
        }
    } else {
		$mensaje = 'Completa el título, el nombre de la fotografía y el copete.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Subir Noticia</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
</head>
<body>
<header>
<div id="min_header">
<nav>
<a href="index.php" title="Volver a Home">
<i class="fas fa-home iconos_menu"></i><span class="texto_menu">HOME</span>
</a>
<a href="formulario_noticia.php" title="Agregar noticia" class="active">
<i class="fas fa-plus iconos_menu"></i>
<span class="texto_menu">CARGAR NOTICIAS</span>
</a>
</nav>
</div>
</header>
<div id="contenedor">
<section id="formulario_usuario">
<h2>Subir noticia</h2>
<div id="formulario_noticia">
<div id="cartel">
<h3>¡Bienvenid@ <?= htmlspecialchars($_SESSION['usuario']) ?>!</h3>
</div>
<?= $mensaje ?>
<form method="POST" action="">
<div>
<input type="text" name="titulo" placeholder="Título de noticia:" required>
</div>
<div>
<input type="text" name="foto" placeholder="Nombre de fotografía (ej: noticia1.jpg):" required>
</div>
<div>
<textarea placeholder="Escribe el copete de tu noticia:" name="copete" rows="5" required></textarea>
</div>
<div>
<input type="submit" value="Publicar Noticia" style="margin-top:1em; cursor:pointer;">
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