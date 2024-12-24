<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!---CONEXION A LA HOJA DE ESTILOS--->
    <title>Linea de atencion</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   
</head>
<body>


<!---SE INSERTA IMAGEN EL ROBOT--->
<div class="boot">
<img src="images/boot.jpg" alt="">
</div>

    
<!---ESTRUCTURA DEL FORMULARIO--->

    <div class="wrapper">
        <div class="title">Linea Amiga Risaralda</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hola Bienvenido a la <br> linea amiga Risaralda como te encuentras el dia de hoy?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Escribe algo aqui." required>
                <button id="send-btn">Enviar.</button>
            </div>
        </div>
    </div>
<!---CODIGO JAVASCRIPT--->
    <script>
        
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                
                // SE EJECUTA LA INSTRUCCION AJAX
                $.ajax({
                    url: 'message.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // CUANDO EL CHAT VA AVANZANDO EL FORMULARIO GENERA UN MOVIMIENTO HACIA ABAJO
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                });
            });
        });
    </script>
    
</body>
</html>