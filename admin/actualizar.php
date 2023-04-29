<?php 
    require "conexion.php";

    $id = $_POST['id'];
	$correo = $_POST["correo"];
	$contrasena = $_POST["contrasena"];
	$id_cargo = $_POST["id_cargo"];

	$sql = "UPDATE visilant_user SET correo='$correo', contrasena='$contrasena', id_cargo='$id_cargo' WHERE id='$id'";

	$query = mysqli_query($conexion, $sql);

	if($query) {
		header("location: index.php");
	};

?>