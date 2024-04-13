<?php 
include('conexion.php');
$conexion = connect();
$id = $_POST['id'];
$pass = md5($_POST['new_password']);
$query = "UPDATE users set password= '$pass' WHERE id= $id";
$conexion->query($query);
header("Location: index.php?message=success_password");
?>