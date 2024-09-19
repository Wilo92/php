<!doctype html>
<html lang="es">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- Nav tabs -->
        <ul
            class="nav nav-tabs"
            id="navId"
            role="tablist">
            <li class="nav-item">
                <a
                    href="index.php"
                    class="nav-link active"
                    data-bs-toggle="tab"
                    aria-current="page">inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a
                    class="nav-link dropdown-toggle"
                    data-bs-toggle="dropdown"
                    href="#"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#tab2Id">Action</a>
                    <a class="dropdown-item" href="#tab3Id">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#tab4Id">Action</a>
                </div>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#tab5Id" class="nav-link" data-bs-toggle="tab">Another link</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#" class="nav-link disabled" data-bs-toggle="tab">Disabled</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab1Id" role="tabpanel">

            </div>
            <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
            <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
        </div>

        <!-- (Optional) - Place this js code after initializing bootstrap.min.js or bootstrap.bundle.min.js -->
        <script>
            var triggerEl = document.querySelector("#navId a");
            bootstrap.Tab.getInstance(triggerEl).show(); // Select tab by name
        </script>

    </header>
    <main>
        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <?php
                //////CONEXION A LA BASE DE DATOS
                $conexion = mysqli_connect('localhost', 'root', '', 'tienda');
                ///LLAMAR LOS DATOS DE LA BD
                $consulta = 'SELECT * from banner WHERE 1';
                $query = mysqli_query($conexion, $consulta);
                ///ASSOC ES PARA QUE ASOCIE LAS COLUMNAS 
                while ($banner = mysqli_fetch_assoc($query)):
                ?>
                    <div class="carousel-item active">
                        <img
                            src="imagenes/banner/<?= $banner['imagen'] ?>"
                            class="w-100 d-block"
                            alt="First slide" />
                    </div>
                    /////FIN DE LA ITERACCION
                <?php endwhile; ?>

            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!----productos----->
        <div>

            <div class="row row-cols-1 row-cols-md-3 g-4 my-5">

                <?php
                $conexion2 = mysqli_connect('localhost', 'root', '', 'tienda');
                $consulta2 = 'SELECT * FROM productos WHERE 1';
                $query2 = mysqli_query($conexion2, $consulta2);
                while ($producto = mysqli_fetch_assoc($query2)) :
                ?>

                    <div class="col">
                        <div class="card h-100">
                            <img src="imagenes/<?= $producto['imagen']  ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $producto['titulo']  ?></h5>
                                <p class="card-text"><?= $producto['precio']  ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>



            </div>

        </div>






    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>