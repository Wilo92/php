<?php include 'includes/header.php';

////arreglo indexado

$carrito = ["tablet","television","pc"];

////util para ver los contenidos de un array

echo "<pre>";
var_dump($carrito[1]);

echo "</pre>";

///acceder a un elemento del array

echo $carrito[1];


///añade un elemento al indice 3 del arreglo
$carrito[3]="Nuevo producto...";

///añadir un nuevo elemton al final
array_push($carrito,"Audifonos");

////añadir al inicio del arreglo
array_unshift($carrito,"smartwach");


////otra forma para crear arrays
$clientes=array("cliente1","cliente2","cliente3");
echo "<pre>";
var_dump($clientes);
echo "</pre>";

////para ingresar a un elemento en especifico

echo $cliente[1];

include 'includes/footer.php';