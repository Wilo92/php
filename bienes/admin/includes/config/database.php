<?php

//////CONECTAR CON BASE DE DATOS

function conectarDB()
{
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraicas_crud');
    if (!$db) {
        echo "error";
        exit;

    }
    return $db;
     
}