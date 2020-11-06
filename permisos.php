<?php
 require_once('librerias/conexion.php');
 $sql = "select * from permisos";
 $result = $conn->query($sql);
 $permisos = array();
 while ($fila = $result->fetch_array()){
 	$permisos[] = $fila;
 }
 require_once('librerias/cabecera.php');

 ?>
  <div class="container">
    <h1 class="mt-5">PERMISOS</h1>
   	<p> 
   		<a href="permisos-edit.php" class="btn btn-success">Nuevo</a> 
   	</p>
   	<table class="table table-striped">
   		<tr>
   			<th>Id</th>
   			<th>Usuario</th>
   			<th>Rol</th>
   			<th></th>
        <th></th>
   		</tr>
   		<?php foreach ($permisos as $item): ?>
   		<tr>
   			<td><?= $item['id'] ?></td>
   			<td><?= $item['id_usuario'] ?></td>
        <td><?= $item['id_rol'] ?></td>
   			<td>
   				<a href="permisos-edit.php?id=<?= $item["id"] ?>" class="btn btn-primary">Editar</a>
   			</td>
   			<td>
   				<a href="permisos-delet.php?id=<?= $item["id"] ?>" class="btn btn-danger" onclick="return(confirm('Esta Seguro de Eliminar el Registro?'))" >Eliminar</a>
   			</td>
   		</tr>
   		<?php endforeach ?>
   	</table>
  </div>
 <?php
 require_once('librerias/pie.php');
 ?>