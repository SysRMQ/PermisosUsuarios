<?php
require_once('librerias/conexion.php');
  $id = 0;
 $descripcion = '';
 if(isset($_GET['id'])){
    $sql = "select * from permisos where id = ".$_GET['id'];
    $result = $conn->query($sql);
    $fila = $result->fetch_array();

     $id = $fila['id'];
     $id_usuario = $fila['id_usuario'];
     $id_rol = $fila['id_rol'];
}
 require_once('librerias/cabecera.php');
 ?>
  <div class="container">
    <h1 class="mt-5"> <?= ($id > 0 ) ? 'Editar' : 'Nuevo'?> Permiso</h1>
   	<form action="permisos-procesa.php" method="post">
   		<input type="hidden" name="id" value="<?= $id ?>">
  		<div class="form-group">
  		  <label for="">Usuario</label>
        <select name="id_usuario" required " class="form-control py-2">
                                        <?php 
                                            require_once("librerias/conexion.php");
                                            $sql = "select * from usuarios";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0){
                                                while($fila = $result->fetch_array()){
                                                    echo "<option>".$fila["usuario"]."</option>";

                                            }
                                        } 
                                             ?>                                      
                                    </select>
  		</div>
      <div class="form-group">
        <label for="">Rol</label>
        <select name="id_rol" required  class="form-control py-2">
                                     <?php 
                                            require_once("librerias/conexion.php");
                                            $sql = "select * from roles";
                                            $result = $conn->query($sql);
                                            if($result->num_rows > 0){
                                                while($fila = $result->fetch_array()){
                                                    echo "<option>".$fila["descripcion"]."</option>";
                                            }
                                        } 
                                             ?>                                      
                                    </select>
      </div>
 		
  			<button type="submit" class="btn btn-primary">Enviar</button>
	</form>
  </div>
 <?php
 require_once('librerias/pie.php');
 ?>