<?php

//////ESTE ORDEN ES IMPORTANTE
////CONEXIONES 
require 'modelos/ConexionModel.php';
//MODELOS 
require 'modelos/ClienteModel.php';
///////CONTROLADORES
require 'controladores/ClienteController.php';
/////VISTAS
include 'vistas/clientes.php';



/*
$clienteNuevo = new Cliente();
$clienteNuevo->insert('wilmer', 'restrepo', 'wilmer@wilmer.com', 45454545);*/

/*
$clienteNuevo = new Cliente();
$clienteNuevo->delete(1);
*/

/*
$clienteNuevo = new Cliente();
$clienteNuevo->selectID(3);
*/
