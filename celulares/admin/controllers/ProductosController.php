<?php


class ProductosController
{
	//SELECT ALL
	public static function selectAllCtrl()
	{
		return ProductosModel::selectAllMdl();
	}

	/////create

	public function createCtrl($imagen, $titulo, $descripcion, $precio, $stock)
	{

		$nombreImagen = $imagen["name"];
		$tmpImagen    = $imagen["tmp_name"];
		move_uploaded_file($tmpImagen, "../views/img/productos/$nombreImagen");


		$respuesta = ProductosModel::createMdl($nombreImagen, $titulo, $descripcion, $precio, $stock);

		if ($respuesta == true) {
			echo '
			<div
				class="alert alert-success"
				role="alert"
			>
				<strong>EXITO</strong> el producto se agrego
			</div>

			';
		} else {
			echo '
			<div
				class="alert alert-danger"
				role="alert"
			>
				<strong>ERROR</strong> el producto no se agrego
			</div>

			';
		}
	}

	public function deleteCtrl($id)
	{
		$respuesta = ProductosModel::deleteMdl($id);
		if ($respuesta == true) {
			echo '
			<div
				class="alert alert-success"
				role="alert"
			>
				<strong>EXITO</strong> el producto se elimino
			</div>

			';
		} else {
			echo '
			<div
				class="alert alert-danger"
				role="alert"
			>
				<strong>ERROR</strong> el producto no se elimino 
			</div>

			';
		}
	}

	public function updateCtrl($id)
	{
		$respuesta = ProductosModel::updateMdl($id);
		if ($respuesta == true) {
			echo '
			<div 
			class="alert alert-danger"
			role="alert"
			> 
			<strong>EXITO</strong> se actualizo el producto 
			
			
			</div>
			
			';
		} else {
			echo '
			<div
				class="alert alert-danger"
				role="alert"
			>
				<strong>ERROR</strong> el producto no se actualizo
			</div>

			';
		}
	}
}
