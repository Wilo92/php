<?php


class ProductosController
{
	//SELECT ALL
	public static function selectAllCtrl()
	{
		return ProductosModel::selectAllMdl();
	}

	//CREATE

	public function createCtrl($imagen, $titulo, $descripcion, $precio, $stock)
	{

		$nombreImagen = $imagen['name'];
		$tmpImagen    = $imagen['tmp_name'];
		move_uploaded_file($tmpImagen, "../views/img/productos/$nombreImagen");

		$respuesta = ProductosModel::createMdl($nombreImagen, $titulo, $descripcion, $precio, $stock);

		if ($respuesta == true) {
			echo '
					<div class="alert alert-success" role="alert">
						<strong>Exito</strong> el producto se agrego.
					</div>
	            ';
		} else {
			echo '
					<div class="alert alert-danger" role="alert">
						<strong>Error</strong> el producto no se agrego.
					</div>
		        ';
		}
	}

	//DELETE
	public function deleteCtrl($id)
	{
		$respuesta = ProductosModel::deleteMdl($id);

		if ($respuesta == true) {
			echo '
					<div class="alert alert-success" role="alert">
						<strong>Exito</strong> el producto se elimino.
					</div>
	            ';
		} else {
			echo '
					<div class="alert alert-danger" role="alert">
						<strong>Error</strong> el producto no se elimino.
					</div>
		        ';
		}
	}

	/////SELECT ID
	public static function selectIdCtrl($id)
	{
		$respuesta = ProductosModel::selectIdMdl($id);
		return $respuesta;
	}


	///EDIT
	public function editCtrl($id, $imagen, $titulo, $descripcion, $precio, $stock)
	{

		$nombreImagen = $imagen['name'];
		$tmpImagen    = $imagen['tmp_name'];
		move_uploaded_file($tmpImagen, "../views/img/productos/$nombreImagen");

		$respuesta = ProductosModel::editMdl($id, $nombreImagen, $titulo, $descripcion, $precio, $stock);

		if ($respuesta == true) {
			echo '
					<div class="alert alert-success" role="alert">
						<strong>Exito</strong> el producto se edito.
					</div>
	            ';
		} else {
			echo '
					<div class="alert alert-danger" role="alert">
						<strong>Error</strong> el producto no se edito.
					</div>
		        ';
		}
	}
}
