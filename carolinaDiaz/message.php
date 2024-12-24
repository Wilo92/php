<?php
// CONEXION A LA BASE DE DATOS
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// SE OBTIENE EL MENSAJE ESCRITO POR EL USUARIO, ESTO POR MEDIO DE AJAX
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//VERIFICANDO EL REGISTRO DENTRO DE LA BASE DE DATOS
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");

//SI LA CONSULTA DEL USUARIO COINCIDE CON LA CONSULTA DE LA BASE DE DATOS, SE MOSTRARA UNA RESPUESTA, DE LO CONTRARIO EL SISTEMA IRA A LA DECLARACION ELSE MENSAJE NO LOGRO ENTENDERTE
if(mysqli_num_rows($run_query) > 0){
    //PREPARAR LA REPETICION DE LA RESPUESTA SEGUN LO ESCRITO POR EL USUARIO
    $fetch_data = mysqli_fetch_assoc($run_query);
    //ALMACENAR LA RESPUESTA EN UNA VARIABLE QUE ENVIAREMOS POR AJAX
    $replay = $fetch_data['replies'];
    echo $replay;
    /////SE EJECUTA EN CASO DE QUE LA PREGUNTA NO SE ENCUENTRE REGISTRADO EN LA BASE DE DATOS
}else{
    echo "Lo siento no logro entenderte";
}

?>