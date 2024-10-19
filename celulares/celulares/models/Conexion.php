<?php


class Conexion
{

	public static function DB()
	{
		$cnx = new mysqli('localhost', 'root', '', 'celulares');

		return $cnx;
	}
}
