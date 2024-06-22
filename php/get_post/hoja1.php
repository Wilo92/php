<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <!--  <a href="hoja2.php?nombre=Carlos Ospina&edad=37&ciudad=pereira">ENVIAR</a> -->
<form action="hoja2.php" method="post">
    <div>
        <label for="">Nombre</label>
        <input type="text" name="nombre">
    </div>

    <div>
        <label for="">apellido</label>
        <input type="text" name="apellido">
    </div>

    <input type="submit" value="ENVIAR">

</form>
</body>
</html>