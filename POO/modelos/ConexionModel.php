<?php

class ConexionModel
{
    public static function sql()
    {
        $cnx = new mysqli('localhost', 'root', '', 'tiendas');
        return $cnx;
    }
}
