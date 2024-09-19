<?php include 'componentes/header.php' ?>

<?php
if (isset($_GET['respuesta']) && $_GET['respuesta'] == 'ok') {
    echo '<div
    class="alert alert-success "
    role="alert">
    <strong>Exito</strong> La accion se completo
</div>';
}
if (isset($_GET['respuesta']) && $_GET['respuesta'] == 'error') {
    echo '<div
    class="alert alert-danger"
    role="alert">
    <strong>Error</strong> La accion no se completo
</div>';
}

?>






<h1 class="text-center my-5">productos</h1>
<a href="crearproducto.php" class="btn btn-primary my-3">Crear</a>
<div
    class="table-responsive">
    <table
        class="table table-dark">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">img</th>
                <th scope="col">titulo</th>
                <th scope="col">precio</th>
                <th scope="col">accion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $conexion = mysqli_connect('localhost', 'root', '', 'tienda');
            $consulta = 'SELECT * FROM productos WHERE 1';
            $query = mysqli_query($conexion, $consulta);
            while ($producto = mysqli_fetch_assoc($query)) :
            ?>
                <tr>
                    <td><?= $producto['id'] ?></td>
                    <td><img src="../imagenes/<?= $producto['imagen'] ?>" alt="" width="35px"></td>
                    <td><?= $producto['titulo'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td>
                        <a href="formularioEditarProducto.php?cual=<?= $producto['id'] ?>" class="btn btn-warning">editar</a>
                        <a href="eliminarProducto.php?cual=<?= $producto['id'] ?>" class="btn btn-danger">eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>

        </tbody>
    </table>
</div>

<?php include 'componentes/footer.php' ?>