<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>

    <!--SE LINKEA EL CODIGO CSS -->
    <link rel="stylesheet" href="/vehiculos/build/css/app.css">
</head>

<body>

    <header class="header <?php
                            //CONFIGURACION PARA QUE LA IMAGEN DEL ENCABEZADO SOLO SE VEA EN LA PAGINA PRINCIPAL
                            echo $inicio ? "inicio" : "";
                            ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/vehiculos/index.php">
                    <img src="build/img/logo.svg" alt="Logotipo de Bienes Raices">
                </a>

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" src="build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                    </nav>
                </div>


            </div> <!--.barra-->
            <?php
            ////CONFIGURACION PARA DELAR EL TITULO SOLO EN LA PAGINA DE INICIO
            if ($inicio) { ?>
                <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } ?>
            

        </div>
    </header>