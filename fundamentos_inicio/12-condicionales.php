<?php include 'includes/header.php';


$autenticado = true;
$admin = false;

if ($autenticado and $admin) {
    echo "binevenido";
} else {
    echo "error";
}

///if anidado

$cliente = [
    "nombre" => "wilo",
    "saldo" => 200,
    "informacion" => [
        "tipo" => "premium"
    ]
];

if (empty($cliente)) {
    echo "campo vacio";
} else {
    echo "no esta vacio";
}

if (!empty($cliente)) {
    echo "campo no vacio";
    if ($cliente["saldo"] > 0) {
        echo "el saldo esta disponible";
    }
} else {
    echo "no hay saldo";
}

echo "<br>";
///////else if
if ($cliente["saldo"] > 0) {
    echo "el cliente tiene saldo";
} else if ($cliente["informacion"]["tipo"] === "premium") {
    echo "cliente premium";
} else {
    echo "no hay clientes definidos";
};


////switch
echo "<br>";
$tecnologia = "php";
switch($tecnologia){
    case "php":
        echo "php es bueno";
        break;

        case "java":
            echo "muy bueno";
            break;

        default:
        echo "algun lenguaje que no se cual es ";
        break;
}



include 'includes/footer.php';
