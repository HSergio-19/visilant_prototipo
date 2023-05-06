<!--FUNCION DE ACTUALIZAR DATOS DE USUARIO-->

<?php 
    require "../database/conexion.php";

    $id = $_POST['id'];
	$correo = $_POST["correo"];
	$contrasena = $_POST["contrasena"];

	$sql = "UPDATE visilant_db SET correo='$correo', contrasena='$contrasena' WHERE id='$id'";

	$query = mysqli_query($conexion, $sql);

	if($query) {
		header("location: index.php");
	};

?>