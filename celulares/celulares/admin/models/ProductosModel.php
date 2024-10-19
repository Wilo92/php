<?php

class ProductosModel extends Conexion
{
	//SELECT ALL
	public static function selectAllMdl()
	{
		$stm = self::DB();
		return  $stm->query("SELECT * FROM productos WHERE 1 ORDER BY id DESC ");
	}

	//CREATE
	public static function createMdl($imagen, $titulo, $descripcion, $precio, $stock)
	{
		$stm = self::DB();
		return  $stm->query("INSERT INTO `productos`( `img`, `titulo`, `descripcion`, `precio`, `stock`) VALUES ('$imagen','$titulo','$descripcion','$precio','$stock') ");
	}


	//DELETE
	public static function deleteMdl($id)
	{
		$stm = self::DB();
		return  $stm->query("DELETE FROM `productos` WHERE id = $id ");
	}


	/////SELECT ID

	public static function selectIdMdl($id)
	{
		$stm = self::DB();
		return $stm->query("SELECT * FROM productos WHERE id=$id")->fetch_assoc();
	}



	/////editar
	public static function editMdl($id, $imagen, $titulo, $descripcion, $precio, $stock)
	{
		$stm = self::DB();
		return  $stm->query("UPDATE `productos` SET 
		`img`			='$imagen',
		`titulo`		='$titulo',
		`descripcion`	='$descripcion',
		`precio`		='$precio',
		`stock`			='$stock' 
		WHERE id		=$id 
		");
	}
}
