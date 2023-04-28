<?php 
    require "conexion.php";


    $id = $_POST['id'];
	$nombre = $_POST["correo"];
	$apellido = $_POST["contrasena"];

	$sql = "UPDATE visilant_user SET correo='$correo', contrasena='$contrasena' WHERE id='$id'";
	$query = mysqli_query($conexion, $sql);

	if($query) {
		header("location: index.php");
	};

?>