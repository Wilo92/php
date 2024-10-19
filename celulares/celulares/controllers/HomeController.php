<?php


class HomeController
{

	//SELECT ALL BANNER
	public static function selectAllbannerCtrl()
	{
		$respuesta = HomeModel::selectAllBannerMdl();
		return $respuesta;
	}

	//DESTACADOS
	public static function destacadosCtrl()
	{
		$respuesta = HomeModel::destacadosMdl();
		return $respuesta;
	}
}
