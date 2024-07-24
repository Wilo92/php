<?php include 'includes/header.php';

////in array --buscar elementos en un arreglo
$carrito=["tablet","pc","tv"];
var_dump(in_array("tablet",$carrito)); 
var_dump(in_array("audifonos",$carrito)); 


///Ordenar elementos de un arreglo 
$numeros=array( 1,2,3,4,5,6,7);
sort($numeros); ////de menor a mayor
rsort($numeros);////de mayor a menor


echo "<pre>";
var_dump($numeros);
echo "</pre>";

////ordenar arreglo asociativo

$cliente=array(
    "saldo"=>200,
    "tipo" =>"Premium",
    "nombre"=>"Juan"
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

/////
asort($cliente);////////////ordena por valores (orden alfabetico)
ksort($cliente);///////////ordenar llaves (ordena por llaves)
krsort($cliente);//////////ordena de Z-A

echo "<pre>";
var_dump($cliente);
echo "</pre>";



include 'includes/footer.php';