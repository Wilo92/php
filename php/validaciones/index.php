<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <?php
    if (isset($_GET['respuesta']) && $_GET['respuesta'] == 'false') {
        echo '<h1 style="color:red">Complete los datos</h1>';
    }

    ?>
    <h1 style="color:red">Complete los datos</h1>

    <form action="procesarFormulario.php" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <!-- <input type="text" name="nombre" id="nombre" required pattern="[a-zA-Z ]{4,45}"> -->
            <input type="text" name="nombre" id="nombre" value="<?php echo isset($_GET['nombre'])?$_GET['nombre']:''; ?>">

            
        </div>

        <div>
            <label for="celular">Celular</label>
            <!-- <input type="number" name="celular" id="celular" required pattern="[0-9]{10}"> -->
            <input type="number" name="celular" id="celular" value="<?php echo isset($_GET['celular'])?$_GET['celular']:''; ?>">
        </div>

        <div>
            <label for="email">E-mail</label>
            <!-- <input type="email" name="email" id="email" required> -->
            <input type="email" name="email" id="email" value="<?php echo isset($_GET['email'])?$_GET['email']:''; ?>">
        </div>

        <input type="submit" value="Enviar">

    </form>


</body>

</html>