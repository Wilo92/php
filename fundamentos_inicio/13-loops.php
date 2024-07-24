<?php include 'includes/header.php';
///while
/*
$i = 0; ///inicializador
while ($i < 10) {
    echo $i . "<br>";
    $i++;
}

echo "<br>";

//DO WHILE

$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);


*/



/*
*3 imprimir fizz
*5 imprimir buzz
*3y5 imprimir fizzbuzz 

*/



////FOR LOOP
/*
for ($i = 1; $i < 1000; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . "- fizz buzz  <br/>";
    } elseif ($i % 3 === 0) {
        echo $i . "- fizz  <br/>";
    } else if ($i % 5 === 0) {
        echo $i . "- buzz  <br/>";
    }else{
        echo $i . "<br/>";
    }
}
    */
    


    ///////FOR EACH 

    $clientes = array("pedro","juan","maria");

    foreach($clientes as $cliente){
        echo $cliente. "<br/>";
    }




include 'includes/footer.php';
