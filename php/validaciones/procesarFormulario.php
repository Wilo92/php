<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];



    ///VALIDO NOMBRE
    if (is_string($nombre) && preg_match("/[a-zA-Z ]{3,45}/", $nombre)) {
        echo  "<h1>el nombre es: $nombre</h1>";
    } else {
        $error = "ok";
    }


    ////VALIDO CELULAR
    if (is_numeric($celular) && preg_match("/[0-9]{10}/", $celular)) {
        echo  "<h1>su celular es $celular</h1>";
    } else {
        $error = "ok";
    }

    ////VALIDO CORREO
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>El email es $email</h1>";
    } else {
        $error = "ok";
    }

    if (isset($error)&&$error=="ok") {
        header("location:index.php?respuesta:false&nombre=$nombre&celular=$celular&email=$email");
    }


} else {
    header("location:index.php");
}


