<?php
require_once('librerias/conexion.php');

$id = $_POST["id"];
$usuario = $_POST["usuario"];
$correo = $_POST["correo"];
$clave =md5($_POST["clave"]);

if($id == 0){
$sql = "insert into usuarios (usuario, correo, clave) values ('$usuario','$correo','$clave')";
}
else{
	$sql = "update usuarios set usuario='$usuario', correo='$correo', clave='$clave' where id = '$id'";
}
$result = $conn->query($sql);

if (!$result) die('<Error al Insertar');
header('Location: usuarios.php');


?>