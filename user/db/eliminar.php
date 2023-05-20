<?php 
    require "../../db/conexion.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM visitas WHERE id='$id'";

    $query = mysqli_query($conexion, $sql);

    if($query) {
    echo '<script>
            alert("SE HA ELIMINADO LOS DATOS DE LA VISITA");
            window.location = "../monitor_visita.php"; 
        </script>';
	};

    ?>