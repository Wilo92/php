


<?php
$titulo         = $_POST['titulo'];
$precio         = $_POST['precio'];
$temporalImagen = $_FILES['imagen']['tmp_name'];
$nombreImagen   = $_FILES['imagen']['name'];

///MOVER IMAGEN A LA CARPETA TEMPORA
move_uploaded_file($temporalImagen, "../imagenes/$nombreImagen");


////INSERTAR EN LA BASE DE DATOS
$conexion = mysqli_connect('localhost', 'root', '', 'tienda');
$consulta = "INSERT INTO productos(titulo,imagen,precio)
 VALUES('$titulo','$nombreImagen','$precio')";
$query = mysqli_query($conexion, $consulta);

if ($query == true) {
    header('Location:productos.php?respuesta=ok');
} else {
    header('Location:productos.php?respuesta=error');
}
