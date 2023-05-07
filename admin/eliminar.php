
<!--FUNCION DE ELIMINAR DATOS DE USUARIO-->

<?php 
    require "../database/conexion.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM visilant_db WHERE id='$id'";

    $query = mysqli_query($conexion, $sql);

    if($query) {
		header("location: index.php");
	};

    ?>