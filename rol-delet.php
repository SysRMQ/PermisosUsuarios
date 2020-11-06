<?php

require_once('librerias/conexion.php');

$ide = $_GET['id'];

$sql = "delete from roles where id = '$ide'";
$result = $conn->query($sql);

if (!$result) die("Error al Eliminar");
header('Location: roles.php');
?>