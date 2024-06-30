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

include_once("../config/bd.php");

switch ($accion) {
    case 'Agregar':

        $sentenciaSQL = $conexion->prepare("INSERT INTO libros(nombre, imagen) VALUES (:nombre,:imagen);");
        $sentenciaSQL->bindParam(":nombre", $txtNombre);

        $fecha = new DateTime();
        $nombreArchivo=($txtImagen!="")?$fecha->getTimestamp()."_".$_FILES["txtImagen"]["name"]:"imagen.jpg";
        $tmpImagen=$_FILES["txtImagen"]["tmp_name"];

        if($tmpImagen!=""){
            move_uploaded_file($tmpImagen,"../../img/".$nombreArchivo);
        }

        $sentenciaSQL->bindParam(":imagen", $nombreArchivo);
        $sentenciaSQL->execute();
        break;

    case "Modificar";
        $sentenciaSQL = $conexion->prepare("UPDATE libros SET nombre=:nombre WHERE id=:id");
        $sentenciaSQL->bindParam(":nombre", $txtNombre);
        $sentenciaSQL->bindParam(":id", $txtID);
        $sentenciaSQL->execute();

        if ($txtImagen != "") {
            $sentenciaSQL = $conexion->prepare("UPDATE libros SET imagen=:imagen WHERE id=:id");
            $sentenciaSQL->bindParam(":imagen", $txtImagen);
            $sentenciaSQL->bindParam(":id", $txtID);
            $sentenciaSQL->execute();
        }


        break;

    case "Cancelar";
        echo "presionado boton cancelar";

        break;

    case "Seleccionar";

        $sentenciaSQL = $conexion->prepare("SELECT * FROM libros WHERE id=:id");
        $sentenciaSQL->bindParam(":id", $txtID);

        $sentenciaSQL->execute();
        $libro = $sentenciaSQL->fetch(PDO::FETCH_LAZY);
        $txtNombre = $libro["nombre"];
        $txtImagen = $libro["imagen"];
        break;

    case "Borrar";
        $sentenciaSQL = $conexion->prepare("DELETE  FROM libros WHERE id=:id");
        $sentenciaSQL->bindParam(":id", $txtID);

        $sentenciaSQL->execute();

        break;
}
$sentenciaSQL = $conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();

$listaLibros = $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

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
                    <input type="text" class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="Enter ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre">Nombre:</label>
                    <input type="text" class="form-control" value="<?php echo $txtNombre; ?>" name="txtNombre" id="txtNombre" placeholder="Enter product Name">

                </div>

                <div class="form-group">
                    <label for="txtNombre">Imagen:</label>

                    <?php echo $txtImagen; ?>
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
            <?php foreach ($listaLibros as $libro) { ?>

                <tr>
                    <td><?php echo $libro["id"]; ?></td>
                    <td><?php echo $libro["nombre"]; ?></td>
                    <td><?php echo $libro["imagen"]; ?></td>

                    <td>


                        <form method="post">
                            <input type="hidden" name="txtID" id="txtID" value="<?php echo $libro["id"]; ?>" />
                            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary" />
                            <input type="submit" name="accion" value="Borrar" class="btn btn-danger" />
                        </form>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


<?php include_once("../templete/pie.php") ?>