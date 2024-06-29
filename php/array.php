<?php
$alumnos = [
    ["nombre" => "carlos", "apellido" => "ospina", "correo" => "@gmail", "edad" => 37],
    ["nombre" => "carlos", "apellido" => "ospina", "correo" => "@gmail", "edad" => 37],
    ["nombre" => "carlos", "apellido" => "ospina", "correo" => "@gmail", "edad" => 37],
];

$categorias = [
["contenido"=>"alumnos"],
["contenido"=> "profesores"],
["contenido"=> "empleados"]
];




echo $alumnos[2]["edad"];

foreach ($alumnos as $key => $alumno) {
    echo "Nombre: " . $alumno["nombre"];
    echo "<br>";
    echo "Email: " . $alumno["correo"];
    echo "<br>";
    # code...
};

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIAS</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            
                            <?php
                            
                            foreach ($categorias as $key => $categoria) {
                                echo "<a class='dropdown-item'>$categoria[contenido]</a>";
                            }
                            
                            ?>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>

    </header>
    <main class="container">
        <h1 class="text-center my-5">$alumnos</h1>
        <div class="table-responsive">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($alumnos as $key => $value) {
                        echo "
                        
                        <tr>
                            <td>$value[nombre]</td>
                            <td>$value[apellido]</td>
                            <td>$value[correo]</td>
                            <td>$value[edad]</td>

                            <td>
                            <a href='' class='btn btn-warning' >Editar</a>
                             <a href='' class='btn btn-primary' >Eliminar</a>

                    </td>
                            
                        </tr>
                        ";
                    }

                    ?>
                </tbody>
            </table>
        </div>

    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>