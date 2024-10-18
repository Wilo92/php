<?php
class ClienteController
{
    ////SELECCIONA DE LA BASE DE DATOS
    public function selectAllCtrl()
    {
        $respuesta = new ClienteModel();
        return $respuesta->selectAllMdl();
    }

    //INSERTA CLIENTE  A LA BASE DE DATOS
    public function insert($nombre, $apellido, $email, $documento) {}


    ///SELECT POR IDE

    public function selectId($id) {}


    //ELIMINAR UN CLIENTE  A LA BASE DE DATOS
    public function delete($id) {}
}
