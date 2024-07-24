<?php include 'includes/header.php';

$clientes=[];
$clientes2=array();
$clientes3=array("pedro","juan","marcos");
$cliente=[
    "nombre"=>"juan",
    "saldo"=> 200
];

///empty-revisa si un arreglo esta vacio
var_dump(empty($clientes));
var_dump(empty($clientes3));
var_dump(empty($clientes2));

///isset - revisa si un arreglo esta creado o propiedad definida
echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes2));

////isset permite revisar si una propiedad de un arreglo asocitivo existe
var_dump(isset($cliente["nombre"]));
var_dump(isset($cliente["codigo"]));
var_dump(isset($clientes3[100]));


include 'includes/footer.php';