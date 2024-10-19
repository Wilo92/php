<?php
$producto = ProductosController::selectIdCtrl($_GET['cual']);



?>
<section class="my-5">

	<div class="row">
		<div class="col-md-4">
			<img src="views/img/productos/<?= $producto['img'] ?>" alt="">
		</div>
		<div class="col-md-8">
			<h1><?= $producto['titulo'] ?></h1>
			<h5>Disponible: <?= $producto['stock'] ?> unidades</h5>
			<h3>Precio $ <?= number_format($producto['precio']) ?></h3>
		</div>
	</div>
	<div class="m-5">
		<p><?= $producto['descripcion'] ?></p>
	</div>

</section>