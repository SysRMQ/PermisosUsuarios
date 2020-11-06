<?php
 require_once('librerias/conexion.php');
 $sql = "select * from roles";
 $result = $conn->query($sql);
 $roles = array();
 while ($fila = $result->fetch_array()){
 	$roles[] = $fila;
 }
 require_once('librerias/cabecera.php');

 ?>
  <div class="container">
    <h1 class="mt-5">ROLES</h1>
   	<p> 
   		<a href="roles-edit.php" class="btn btn-success">Nuevo</a> 
   	</p>
   	<table class="table table-striped">
   		<tr>
   			<th>Id</th>
   			<th>Descripcion</th>
   			<th></th>
   			<th></th>
   		</tr>
   		<?php foreach ($roles as $item): ?>
   		<tr>
   			<td><?= $item['id'] ?></td>
   			<td><?= $item['descripcion'] ?></td>
   			<td>
   				<a href="roles-edit.php?id=<?= $item["id"] ?>" class="btn btn-primary">Editar</a>
   			</td>
   			<td>
   				<a href="rol-delet.php?id=<?= $item["id"] ?>" class="btn btn-danger" onclick="return(confirm('Esta Seguro de Eliminar el Registro?'))" >Eliminar</a>
   			</td>
   		</tr>
   		<?php endforeach ?>
   	</table>
  </div>
 <?php
 require_once('librerias/pie.php');
 ?>