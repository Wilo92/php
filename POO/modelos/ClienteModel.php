<?php

class ClienteModel extends ConexionModel
{
    ////SELECCIONA DE LA BASE DE DATOS
    public function selectAllMdl()
    {
        $cnx = self::sql();
        return $cnx->query('SELECT * FROM clientes');
    }

    //INSERTA CLIENTE  A LA BASE DE DATOS
    public function insert($nombre, $apellido, $email, $documento)
    {
        $cnx = self::sql();
        $cnx->query(
            "INSERT INTO clientes
        (`nombre`, `apellido`, `email`,
         `documento`) 
         VALUES('$nombre','$apellido','$email','$documento')"
        );
    }


    ///SELECT POR IDE

    public function selectId($id)
    {
        $cnx = self::sql();
        return $cnx->query("SELECT FROM clientes WHERE id=$id")->fetch_assoc();
    }


    //ELIMINAR UN CLIENTE  A LA BASE DE DATOS
    public function delete($id)
    {
        $cnx = self::sql();
        $cnx->query("DELETE FROM clientes WHERE id=$id");
    }
}
