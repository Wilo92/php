<?php include_once("../templete/cabecera.php")?>


<!-- Se crea la interfaz del CRUD  -->

<div class="col-md-5">
<form>
<div class = "form-group">
<label for="textID">ID:</label>
<input type="text" class="form-control" name="txtID" id="txtID"  placeholder="Enter ID">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>

<div class = "form-group">
<label for="textNombre">Nombre:</label>
<input type="text" class="form-control" name="txtNombre" id="txtNombre"  placeholder="Enter product Name">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>


<button type="submit" class="btn btn-primary">Sign In</button>
</form>


</div>

<div class="col-md-7">
    tabla de libros donde se muestran los datos
</div>


<?php include_once("../templete/pie.php")?>