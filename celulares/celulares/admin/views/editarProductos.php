<?php

$producto =  ProductosController::selectIdCtrl($_GET['id']);
?>


<h1 class="text-center my-5">EDITAR PRODUCTO</h1>


<div class="d-flex justify-content-center">

    <form class="col-6" action="index.php?modulo=productos" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idEditar" value="<?= $producto['id'] ?>">
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">TITULO:</label>
            <input type="text" class="form-control" id="recipient-name" name="edittitulo" value="<?= $producto['titulo'] ?>">
        </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">PRECIO:</label>
            <input type="text" class="form-control" id="recipient-name" name="editprecio" value="<?= $producto['precio'] ?>">
        </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">STOCK:</label>
            <input type="text" class="form-control" id="recipient-name" name="editstock" value="<?= $producto['stock'] ?>">
        </div>
        <div class="mb-3">
            <label for="message-text" class="col-form-label">DESCRIPCION:</label>
            <textarea class="form-control" id="message-text" name="editdescripcion"><?= $producto['descripcion'] ?></textarea>
        </div>
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">IMAGEN:</label>
            <input type="file" class="form-control" id="recipient-name" name="editimagen">
        </div>
        <input type="submit" value="AGREGAR" class="btn btn-primary w-100">


    </form>

</div>