<?php


class ProductosController
{
	//SELECCIONAR TODOS LOS PRODUCTOS
	public static function selectAllCtrl()
	{
		$respuesta = ProductosModel::selectAllMdl();
		return $respuesta;
	}

	//SELECCONAR PRODUCTO POR ID
	public static function selectIdCtrl($id)
	{

		$respuesta = ProductosModel::selectIdMdl($id);
		return $respuesta;
	}
}
