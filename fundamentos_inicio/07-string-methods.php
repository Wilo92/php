<?php include 'includes/header.php';

$nombreCliente="wilo";
///imprime la cantidad de caracteres
echo strlen($nombreCliente);
var_dump($nombreCliente);

///eliminar espacios en blanco 
$texto = trim($nombreCliente);
echo strlen($texto);

///convertir a mayusculas
echo strtoupper($nombreCliente);

///convertir en minusculas
echo strtolower($nombreCliente);

$mail1="correo@correo.com";
$mail2="Correo@correo.com";

var_dump(strtolower($mail1) ===strtolower ($mail2));

////para reemplazar contenido
echo str_replace("wilo","wilmer",$nombreCliente);


///revisar si un string existe o no

echo strpos($nombreCliente,"Juan");
$tipoCliente="Premium";

///concatenar

echo "el cliente ".$nombreCliente . "es" . $tipoCliente;
echo "el cliente {$nombreCliente} es {$tipoCliente}";



include 'includes/footer.php';