<?php include 'includes/header.php';
/////arreglos asociativos 
$cliente = [
    "nombre" => "Wilo",
    "saldo" => 333333,
    "informacion" => [
        "tipo" => "premium",
        "disponible" =>100
    ]
];

/////ver contenido del arreglo
echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente["nombre"];
echo $cliente["saldo"];
echo $cliente["informacion"]["tipo"];



$cliente["codigo"]=1234566677;
echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';
