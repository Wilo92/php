<?php
include 'componentes/header.php'; ?>


<h1 class="text-center my-3">CREAR PRODUCTO</h1>

<div>
    <div class="d-flex justify-content-center my-5">

        <form action="procesarCrearProducto.php" method="post" class="form-group col-md-6" enctype="multipart/form-data">

            <div class='mb3'>
                <label for="" class="form-label">TITULO:</label>
                <input type="text" name="titulo" class="form-control">
            </div>

            <div class='mb3'>
                <label for="" class="form-label">PRECIO:</label>
                <input type="text" name="precio" class="form-control">
            </div>

            <div class='mb3'>
                <label for="" class="form-label">IMAGEN:</label>
                <input type="file" name="imagen" class="form-control">
            </div>

            <input type="submit" value="Agregar" class="btn btn-primary w-100">


        </form>
    </div>






    <?php include 'componentes/footer.php'; ?>










    ?>