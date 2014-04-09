<?php 
	error_reporting(E_ALL ^E_NOTICE ^E_WARNING);
	$op = $_GET["op"];
	switch ($op) {
		case 'portafolio':
			$contenido = "webs.html";			
			break;
		case 'contacto':
			$contenido = "contacto.html";
			break;
		default:
			$contenido = "portafolio.html";
			break;
	}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
	<title>Mi Portafolio</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>	
	<section id="contenedor">		
		<nav>
			<ul>
				<li><a href="index.php"><img src="img/mario-logo.png" alt="logo" width="150"></a></li>
				<li><a href="?op=portafolio">portafolio</a></li>
				<li><a href="#">blog</a></li>
				<li><a href="?op=contacto">contacto</a></li>
			</ul>
		</nav>
		<section id="principal">
			<?php 
				include($contenido);
			 ?>
		</section>		
	</section>
</body>
</html>