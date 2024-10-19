<?php

class HomeModel  extends Conexion
{

	//SELECT ALL BANNERS
	public static function selectAllBannerMdl()
	{
		$stm = self::DB();
		return $stm->query('SELECT * FROM banners WHERE 1 ');
	}


	//DESTACADOS
	public static function destacadosMdl()
	{
		$stm = self::DB();
		return $stm->query('SELECT * FROM productos ORDER BY id DESC LIMIT 3;');
	}
}
