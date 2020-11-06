 <?php
 require_once('librerias/conexion.php');
 $sql = "select * from usuarios";
 $result = $conn->query($sql);
 $usuarios = array();
 while ($fila = $result->fetch_array()){
 	$usuarios[] = $fila;
 }
 require_once('librerias/cabecera.php');

 ?>
  <div class="container">
    <h1 class="mt-5">USUARIOS</h1>
   	<p> 
   		<a href="usuarios-edit.php" class="btn btn-success">Nuevo</a> 
   	</p>
   	<table class="table table-striped">
   		<tr>
   			<th>Id</th>
   			<th>Usuarios</th>
   			<th>Correo</th>
   			<th>Clave</th>
   			<th></th>
   			<th></th>
   		</tr>
   		<?php foreach ($usuarios as $item): ?>
   		<tr>
   			<td><?= $item['id'] ?></td>
   			<td><?= $item['usuario'] ?></td>
   			<td><?= $item['correo'] ?></td>
   			<td><?= $item['clave'] ?></td>
   			<td>
   				<a href="usuarios-edit.php?id=<?= $item["id"] ?>" class="btn btn-primary">Editar</a>
   			</td>
   			<td>
   				<a href="usuarios-delet.php?id=<?= $item["id"] ?>" class="btn btn-danger" onclick="return(confirm('Esta Seguro de Eliminar el Registro?'))" >Eliminar</a>
   			</td>
   		</tr>
   		<?php endforeach ?>
   	</table>
  </div>
 <?php
 require_once('librerias/pie.php');
 ?>