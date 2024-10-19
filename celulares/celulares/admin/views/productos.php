<?php


////EDITAR

if (isset($_POST['idEditar'])) {
	$editar = new ProductosController();
	$editar->editCtrl(
		$_POST['idEditar'],
		$_FILES['editimagen'],
		$_POST['edittitulo'],
		$_POST['editdescripcion'],
		$_POST['editprecio'],
		$_POST['editstock']
	);
}

//CREAR
if (isset($_POST['titulo'])) {
	$crearProducto = new ProductosController();
	$crearProducto->createCtrl(
		$_FILES['imagen'],
		$_POST['titulo'],
		$_POST['descripcion'],
		$_POST['precio'],
		$_POST['stock']
	);
}

//ELIMINAR
if (!empty($_GET['id'])) {

	$eliminar = new ProductosController();
	$eliminar->deleteCtrl($_GET['id']);
}

?>

<h1 class="text-center my-3"> PRODUCTOS</h1>

<button type="button" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">AGEGAR PRODUCTO</button>
<div class="table-responsive">
	<table
		class="table table-dark">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">IMG</th>
				<th scope="col">STOCK</th>
				<th scope="col">TITULO</th>
				<th scope="col">DESCRIPCION</th>
				<th scope="col">PRECIO</th>
				<th scope="col">ACCION</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$productos = ProductosController::selectAllCtrl();
			foreach ($productos as $key => $value):
			?>
				<tr>
					<td><?= $value['id'] ?></td>
					<td>
						<img src="../views/img/productos/<?= $value['img'] ?>" alt="" width="40px">
					</td>
					<td><?= $value['stock'] ?></td>
					<td><?= $value['titulo'] ?></td>
					<td><?= $value['descripcion'] ?></td>
					<td><?= $value['precio'] ?></td>
					<td>
						<div class="btn-group">
							<a href="index.php?modulo=editarProductos&id=<?= $value['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
							<a href="index.php?modulo=productos&id=<?= $value['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>


<!-- FORMULARIO AGREGAR PRODUCTO -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="exampleModalLabel">CREAR NUEVO PRODCUCTO</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="index.php?modulo=productos" method="post" enctype="multipart/form-data">
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">TITULO:</label>
						<input type="text" class="form-control" id="recipient-name" name="titulo">
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">PRECIO:</label>
						<input type="text" class="form-control" id="recipient-name" name="precio">
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">STOCK:</label>
						<input type="text" class="form-control" id="recipient-name" name="stock">
					</div>
					<div class="mb-3">
						<label for="message-text" class="col-form-label">DESCRIPCION:</label>
						<textarea class="form-control" id="message-text" name="descripcion"></textarea>
					</div>
					<div class="mb-3">
						<label for="recipient-name" class="col-form-label">IMAGEN:</label>
						<input type="file" class="form-control" id="recipient-name" name="imagen">
					</div>
					<input type="submit" value="AGREGAR" class="btn btn-primary w-100">
				</form>
			</div>
		</div>
	</div>
</div>