<?php 
    require "../conexion_2.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM visitas WHERE id='$id'";

    $query = mysqli_query($conexion, $sql);

    if($query) {
    header("location: ../monitor_visita.php");
	};

    ?>