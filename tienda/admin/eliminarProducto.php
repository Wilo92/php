<?php

$id = $_GET['cual'];


$conexion = mysqli_connect('localhost', 'root', '', 'tienda');

$consulta = "DELETE FROM `productos` WHERE id=$id";

$query = mysqli_query($conexion, $consulta);

if ($query == true) {
    header('Location:productos.php?respuesta=ok');
} else {
    header('Location:productos.php?respuesta=error');
}
