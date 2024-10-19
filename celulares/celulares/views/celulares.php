		<!-- PRODUCTOS -->
		<section class="my-5">
			<div class="row row-cols-1 row-cols-md-4 g-4">
				<?php
				$productos = ProductosController::selectAllCtrl();

				foreach ($productos as $key => $value):
				?>

					<div class="col">
						<div class="card h-100 text-secondary">
							<img src="views/img/productos/<?= $value['img'] ?>" class="card-img-top" alt="..." width="130px" height="230px">
							<div class="card-body ">
								<h5 class="card-title"><?= $value['titulo'] ?></h5>
								<h6>Stock: <?= $value['stock'] ?> unidades</h6>
								<h5>Precio: $<?= number_format($value['precio'])  ?></h5>
								<!-- <p class="card-text"><?= $value['descripcion'] ?></p> -->
								<a href="index.php?modulo=verproducto&cual=<?= $value['id'] ?>" class="btn btn-primary btn-sm w-100">VER</a>
							</div>
						</div>
					</div>

				<?php endforeach; ?>

			</div>
		</section>
		<!-- FIN PRODUCTOS -->