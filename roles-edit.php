<?php
require_once('librerias/conexion.php');
  $id = 0;
 $descripcion = '';
 if(isset($_GET['id'])){
    $sql = "select * from roles where id = ".$_GET['id'];
    $result = $conn->query($sql);
    $fila = $result->fetch_array();

     $id = $fila['id'];
     $descripcion = $fila['descripcion'];
     
}
 require_once('librerias/cabecera.php');
 ?>
  <div class="container">
    <h1 class="mt-5"> <?= ($id > 0 ) ? 'Editar' : 'Nuevo'?> Rol</h1>
   	<form action="rol-procesa.php" method="post">
   		<input type="hidden" name="id" value="<?= $id ?>">
  		<div class="form-group">
  		  <label for="">Descripcion</label>
  		  <input type="text" name="descripcion" value="<?= $descripcion?>" class="form-control" >
  		</div>
 		
  			<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
  </div>
 <?php
 require_once('librerias/pie.php');
 ?>