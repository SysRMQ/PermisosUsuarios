<?php
require_once('librerias/conexion.php');

$id = $_POST["id"];
$usuario = $_POST["id_usuario"];
$id_usuario1="select * from usuarios where usuario='$usuario'"; 
$id_u = $conn->query($id_usuario1);
$var = $id_u->fetch_array();
$varu = intval($var['id']);

$rol = $_POST["id_rol"];
$id_rol1="select * from roles where descripcion='$rol'";
$id_r = $conn->query($id_rol1);
$var1 = $id_r->fetch_array();
$varo = intval($var1['id']);                                 
                            
if($id == 0){
$sql = "insert into permisos (id_usuario,id_rol) values ('$varu','$varo')";
}
else{
	$sql = "update permisos set id_usuario='$varu',id_rol='$varo' where id = '$id'";
}
$result = $conn->query($sql);

if (!$result) die('<Error al Insertar');
header('Location: permisos.php');


?>