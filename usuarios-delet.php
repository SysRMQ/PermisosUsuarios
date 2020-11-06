<?php

require_once('librerias/conexion.php');

$ide = $_GET['id'];

$sql = "delete from usuarios where id = '$ide'";
$result = $conn->query($sql);

if (!$result) die("Error al Eliminar");
header('Location: usuarios.php');
?>