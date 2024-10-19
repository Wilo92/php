<?php
//CONEXION
require 'models/Conexion.php';

//MODELOS
require 'models/ProductosModel.php';

//CONTROLADORES
require 'controllers/ProductosController.php';
?>

<!doctype html>
<html lang="es">

<head>
	<title>ADMIN - Home</title>
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
		<!-- place navbar here -->
	</header>
	<main class="container-fluid">

		<div class="row">
			<div class="col-md-3 bg-dark vh-100">

				<ul class="list-group bg-dark">
					<li class="list-group-item ">
						<a href="index.php?modulo=home">Home</a>
					</li>
					<li class="list-group-item">
						<a href="index.php?modulo=productos">PRODUCTOS</a>
					</li>

				</ul>

			</div>
			<div class="col-md-9">
				<?php

				$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'home';

				switch ($modulo) {

					case 'home':
						include 'views/home.php';
						break;

					case 'productos':
						include 'views/productos.php';
						break;

					case 'editarProductos':
						include 'views/editarProductos.php';
						break;
				}

				?>
			</div>
		</div>

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