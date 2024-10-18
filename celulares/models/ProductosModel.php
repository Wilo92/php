<?php


class ProductosModel extends Conexion
{

	//SELECT ALL PRODUCTOS
	public static function selectAllMdl()
	{
		$stm = self::DB();
		return $stm->query('SELECT * FROM `productos` WHERE 1 ORDER BY id DESC');
	}

	//SELECT POR ID
	public static function selectIdMdl($id)
	{
		$stm = self::DB();
		return $stm->query("SELECT * FROM productos WHERE id = $id")->fetch_assoc();
	}
}
