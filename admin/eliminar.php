<?php 
    require "conexion.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM visilant_user WHERE id='$id'";

    $query = mysqli_query($conexion, $sql);

    if($query) {
		header("location: index.php");
	};

    ?>