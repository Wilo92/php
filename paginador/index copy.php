<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="contenainer">
        <h1 class="text-center my-5">PRODUCTOS</h1>
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TITULO</th>
                        <th scope="col">PRECIO</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $cual = isset($_GET['cual']) ? $_GET['cual'] : 0;
                    $filas    = 3;
                    $inicio   = ($cual - 1) * $filas;

                    $conexion = mysqli_connect('localhost', 'root', '', 'tienda');
                    $consulta = "SELECT * FROM productos  LIMIT $inicio,$filas";
                    $query    = mysqli_query($conexion, $consulta);
                    while ($producto = mysqli_fetch_assoc($query)):



                    ?>
                        <tr>
                            <td><?= $producto['id'] ?></td>
                            <td><?= $producto['titulo'] ?></td>
                            <td>$<?= number_format($producto['precio']) ?></td>
                        </tr>

                    <?php endwhile; ?>

                </tbody>
            </table>


            <nav aria-label="Page navigation">
                <ul
                    class="pagination  d-flex justify-content-center  ">

                    <?php
                    $consulta2 = "SELECT COUNT(`id`) AS `total` FROM productos";
                    $query2    = mysqli_query($conexion, $consulta2);
                    $total     = mysqli_fetch_assoc($query2);
                    $hojas     = ceil($total['total'] / $filas);
                    for ($i = 1; $i <= $hojas; $i++) :
                    ?>

                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="index.php?cual=<?= $i ?>"><?= $i ?></a>
                        </li>

                    <?php endfor; ?>

                </ul>
            </nav>


        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>