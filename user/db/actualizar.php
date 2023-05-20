<?php 
    require "../../db/conexion.php";


    $id = $_POST['id'];
	$nombre = $_POST["nombre"];
	$apellido = $_POST["apellido"];
	$cedula = $_POST["cedula"];
	$q_visita = $_POST['q_visita'];  
		
	$sql = "UPDATE visitas SET nombre='$nombre', apellido='$apellido', cedula='$cedula', quien_visita='$q_visita' WHERE id='$id'";
	
	$query = mysqli_query($conexion, $sql);

	if($query) {
		echo '<script>
            alert("SE HAN ACTUALIZADO LOS DATOS");
            window.location = "../monitor_visita.php"; 
        </script>';
	}else{
	    echo '<script>
            alert("HAS INGRESADO UN DATO DE MANERA ERRONEA");
            window.location = "../monitor_visita.php"; 
        </script>';
	}

?>