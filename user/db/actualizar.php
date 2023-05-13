<?php 
    require "../conexion_2.php";


    $id = $_POST['id'];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$telefono = $_POST["telefono"];
	$q_visita = $_POST['q_visita'];  
    $motivo = $_POST['motivo'];  
    $tabla = $_POST['tabla']; 

	
	$sql = "UPDATE visitas SET nombre='$nombre', apellido='$apellido', cedula='$cedula', telefono='$telefono', quien_visita='$q_visita', motivo='$motivo' WHERE id='$id'";
	
	$query = mysqli_query($conexion, $sql);

	if($query) {
		header("location: ../monitor_visita.php");
	};

?>