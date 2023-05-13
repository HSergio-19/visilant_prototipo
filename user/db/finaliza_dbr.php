<?php 
    require "../conexion_2.php";

    $id = $_GET['id'];

    $estado = "FINALIZADA";

    $sql = "UPDATE visitas SET estado='$estado' WHERE id='$id'";


	$query = mysqli_query($conexion, $sql);

    if($query) {
		header("location: ../monitor_visita.php");
	};

    ?>