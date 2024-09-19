<?php

$id = $_GET['cual'];

$conexion = mysqli_connect('localhost', 'root', '', 'tienda');
$consulta = "SELECT * FROM `productos` WHERE id=$id";
$query = mysqli_query($conexion, $consulta);

$producto = mysqli_fetch_assoc($query);


include 'componentes/header.php';
?>

<h1 class="text-center my-3">EDITAR PRODUCTO</h1>

<div>
    <div class="d-flex justify-content-center my-5">

        <form action="procesarFormularioEditarProducto.php" method="post" class="form-group col-md-6" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $producto['id']; ?>">

            <div class='mb3'>
                <label for="" class="form-label">TITULO:</label>
                <input type="text" name="titulo" class="form-control" value="<?= $producto['titulo']; ?>">
            </div>

            <div class='mb3'>
                <label for="" class="form-label">PRECIO:</label>
                <input type="text" name="precio" class="form-control" value="<?= $producto['precio']; ?>">
            </div>

            <div class='mb3'>
                <label for="" class="form-label">IMAGEN:</label>
                <input type="file" name="imagen" class="form-control" value="<?= $producto['imagen']; ?>">
            </div>

            <input type="submit" value="Editar" class="btn btn-warning w-100">


        </form>
    </div>



    <?php

    include 'componentes/footer.php';
