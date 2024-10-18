<?php
$clientes = new ClienteController();
$respuesta = $clientes->selectAllCtrl();
foreach ($respuesta as $key => $value):

?>
    <ul>
        <li><?= $value['id'] ?></li>
        <li><?= $value['nombre'] ?></li>
        <li><?= $value['apellido'] ?></li>
        <li><?= $value['email'] ?></li>
        <li><?= $value['documento'] ?></li>


    </ul>
    <hr>

<?php endforeach; ?>