 <?php
 require_once('librerias/conexion.php');
  $id = 0;
 $usuario = '';
 $correo = '';
 $clave = '';
 if(isset($_GET['id'])){
    $sql = "select * from usuarios where id = ".$_GET['id'];
    $result = $conn->query($sql);
    $fila = $result->fetch_array();

     $id = $fila['id'];
     $usuario = $fila['usuario'];
     $correo = $fila['correo'];
     $clave = $fila['clave'];
}
 require_once('librerias/cabecera.php');
 ?>
  <div class="container">
    <h1 class="mt-5"> <?= ($id > 0 ) ? 'Editar' : 'Nuevo'?> Usuario</h1>
   	<form action="usu-procesa.php" method="post">
   		<input type="hidden" name="id" value="<?= $id ?>">
  		<div class="form-group">
  		  <label for="">Usuario</label>
  		  <input type="text" name="usuario" value="<?= $usuario?>" class="form-control" >
  		</div>
 		<div class="form-group">
 		   <label for="">Correo</label>
 		   <input type="text" name="correo" value="<?= $correo?>" class="form-control" >
 		</div>
 		<div class="form-group">
 		   <label for="">Clave</label>
 		   <input type="password" name="clave" value="<?= $clave ?>" class="form-control" >
 		</div>
  			<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
  </div>
 <?php
 require_once('librerias/pie.php');
 ?>