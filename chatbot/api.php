<?php
$pregunta = $_GET['pregunta'];

$conexion = mysqli_connect('localhost','root','','chatbot');
$consulta = "SELECT respuesta FROM preguntas WHERE pregunta = '$pregunta'";
$query = mysqli_query($conexion,$consulta);

$respuesta = mysqli_fetch_assoc($query);




if ($respuesta != null) {
    echo json_encode($respuesta);
} else {

    $conexion = mysqli_connect('localhost','root','','chatbot');
$consulta = "INSERT INTO `preguntas`(`pregunta`) VALUES ('$pregunta')";
$query = mysqli_query($conexion,$consulta);

    echo json_encode(['respuesta'=>'no entido su pregunta']);
}
