		<!-- BANNER -->
		<section>
			<div id="carouselId" class="carousel slide" data-bs-ride="carousel">
				<ol class="carousel-indicators">
					<li
						data-bs-target="#carouselId"
						data-bs-slide-to="0"
						class="active"
						aria-current="true"
						aria-label="First slide"></li>
					<li
						data-bs-target="#carouselId"
						data-bs-slide-to="1"
						aria-label="Second slide"></li>
					<li
						data-bs-target="#carouselId"
						data-bs-slide-to="2"
						aria-label="Third slide"></li>
				</ol>
				<div class="carousel-inner" role="listbox">


					<?php
					$banners = HomeController::selectAllbannerCtrl();
					foreach ($banners as $key => $value) :
					?>
						<div class="carousel-item active">
							<img
								src="views/img/banner/<?= $value['img'] ?>"
								class="w-100 d-block"
								alt="First slide" />
						</div>
					<?php endforeach; ?>

				</div>
				<button
					class="carousel-control-prev"
					type="button"
					data-bs-target="#carouselId"
					data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button
					class="carousel-control-next"
					type="button"
					data-bs-target="#carouselId"
					data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>

		</section>
		<!--FIN BANNER -->

		<!-- DESTACADOS -->
		<section class="my-5">
			<div class="row row-cols-1 row-cols-md-3 g-4">

				<?php
				$destacados = HomeController::destacadosCtrl();
				foreach ($destacados as $key => $value) :
				?>

					<div class="col">
						<div class="card h-100">
							<img src="views/img/productos/<?= $value['img'] ?>" class="card-img-top" alt="..." width="120px" height="250">
							<div class="card-body">
								<h5 class="card-title"><?= $value['titulo'] ?></h5>
								<p class="card-text"><?= $value['descripcion'] ?></p>
								<h5>$ <?= $value['precio'] ?></h5>
								<a href="index.php?modulo=verproducto&cual=<?= $value['id'] ?>" class="btn btn-primary btn-sm w-100">VER</a>
							</div>
						</div>
					</div>

				<?php endforeach; ?>

			</div>
			</div>
		</section>
		<!-- FIN DESTACADOS -->