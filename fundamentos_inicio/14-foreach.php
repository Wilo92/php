<?php include 'includes/header.php';


$productos = [
    [
        "nombre" => "tablet",
        "precio" => 200,
        "disponible" => true
    ],
    [
        "nombre" => "television",
        "precio" => 600,
        "disponible" => true
    ],
    [
        "nombre" => "monitor",
        "precio" => 800,
        "disponible" => false
    ]


];

foreach ($productos as $producto) { ?>
    <li>
        <p>producto: <?php echo $producto["nombre"]; ?> </p>
        <p>precio: <?php echo "$ " . $producto["precio"]; ?> </p>
        <p><?php echo($producto["disponible "])? "disponible" :"no disponible "; ?></p>

        <?php
if ($producto["disponible"]) {
    echo "<p> disponible </p>";
}else{
    echo "<p>no disponible </p>";
}
        ?>

    </li>


<?php
    echo "<pre>";
    var_dump($producto);

    echo "</pre>";
}



include 'includes/footer.php';
