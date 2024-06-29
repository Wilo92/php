<?php


function  suma($numero1,$numero2){
    $total=$numero1+$numero2;
    return $total;


}

$subtotal=suma(3000,4);
$iva = 19;
$sumaIva = ($subtotal/100)* $iva;
$totalVenta = $subtotal+$sumaIva;


echo $subtotal;
echo "<br>";
echo $iva;
echo "<br>";
echo $totalVenta;

$apellido ="";

if(!empty("apellido")){
    echo $apellido;
} else {
    echo "no existe";
}

echo "<br>";

$frase = "la ciudad es pereira";
$cambio= str_replace("pereira","bogota",$frase);
echo $cambio;












/* function saludar($nombre, $apellido){
    return "<h1>hola $nombre $apellido</h1>";
}

echo saludar("eduardo", "ospina"); */




?>