<?php 
    require "../../db/conexion.php";

    $id = $_GET['id'];

    $estado = "FINALIZADA";

    $sql = "UPDATE visitas SET estado='$estado' WHERE id='$id'";


	$query = mysqli_query($conexion, $sql);

    if($query) {
		echo '<script>
            alert("LA VISITA HA PASADO A UN ESTADO DE FINALIZADO");
            window.location = "../monitor_visita.php"; 
        </script>';
	};

    ?>