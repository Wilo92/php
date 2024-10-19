<?php
//CONEXION
require_once 'models/Conexion.php';

//MODELOS
require_once 'models/HomeModel.php';
require_once 'models/ProductosModel.php';

//CONTROLADORES
require_once 'controllers/HomeController.php';
require_once 'controllers/ProductosController.php';



?>


<!doctype html>
<html lang="es">

<head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta
		name="viewport"
		content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- Bootstrap CSS v5.2.1 -->
	<link
		href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
		rel="stylesheet"
		integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
		crossorigin="anonymous" />
</head>

<body>
	<header>
		<nav
			class="nav justify-content-center  ">
			<a class="nav-link active" href="index.php?modulo=home" aria-current="page">HOME</a>
			<a class="nav-link" href="index.php?modulo=celulares">CELULARES</a>
			<a class="nav-link " href="index.php?modulo=contacto">CONTACTO</a>
		</nav>

	</header>
	<main class="container">

		<?php

		$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'home';

		switch ($modulo) {

			case 'home':
				include 'views/home.php';
				break;

			case 'celulares':
				include 'views/celulares.php';
				break;

			case 'contacto':
				include 'views/contacto.php';
				break;

			case 'verproducto':
				include 'views/producto.php';
				break;
		}

		?>

	</main>
	<footer class="text-center my-3">
		<p>CREADO POR APRENDEMOS WEB</p>
	</footer>
	<!-- Bootstrap JavaScript Libraries -->
	<script
		src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
		integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
		crossorigin="anonymous"></script>

	<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
		integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
		crossorigin="anonymous"></script>
</body>

</html>