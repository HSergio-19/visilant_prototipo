<?php 
	require "conexion.php";
	
	$id = null;
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$curso = $_POST["curso"];
	
	$sql = "INSERT INTO lista_alumnos VALUES('$id','$nombre', '$apellido', '$cedula', '$curso')";
	$query = mysqli_query($conexion, $sql);

	if($query) {
		header("location: index.php");
	};

?>