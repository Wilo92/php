<?php include_once("../templete/cabecera.php") ?>
<?php

/* 
print_r($_POST);
print_r($_FILES);
 */

$txtID = (isset($_POST["txtID"])) ? $_POST["txtID"] : "";
$txtNombre = (isset($_POST["txtNombre"])) ? $_POST["txtNombre"] : "";
$txtImagen = (isset($_FILES["txtImagen"]["name"])) ? $_FILES["txtImagen"]["name"] : "";
$accion = (isset($_POST["accion"])) ? $_POST["accion"] : "";

echo $txtID . "<br/>";
echo $txtNombre . "<br/>";
echo $txtImagen . "<br/>";
echo $accion . "<br/>";


switch ($accion) {
    case 'Agregar':
        echo "presionado boton agregar";
        break;

    case "Modificar";
        echo "presionado boton modificar";

        break;

    case "Cancelar";
        echo "presionado boton cancelar";

        break;
}

?>


<!-- Se crea la interfaz del CRUD  -->

<div class="col-md-5">


    <div class="card">
        <div class="card-header">
            Dato del producto
        </div>
        <div class="card-body">

            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="textID">ID:</label>
                    <input type="text" class="form-control" name="txtID" id="txtID" placeholder="Enter ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre" placeholder="Enter product Name">

                </div>

                <div class="form-group">
                    <label for="txtNombre">Imagen:</label>
                    <input type="file" class="form-control" name="txtImagen" id="txtImagen" placeholder="Enter product Name">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar</button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                </div>

            </form>



        </div>

    </div>




</div>

<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>2</td>
                <td>Aprende</td>
                <td>imagen.jpg</td>
                <td>Seleccionar</td>
            </tr>

        </tbody>
    </table>
</div>


<?php include_once("../templete/pie.php") ?>