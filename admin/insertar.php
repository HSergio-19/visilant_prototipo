<!--FUNCION DE INGRESAR NUEVO USUARIO AL SISTEMA-->

<?php 
	require "../database/conexion.php";
	
	$id = null;
	$correo = $_POST["correo"];
	$contrasena = $_POST["contrasena"];
	$id_cargo = 2;
		
	$sql = "INSERT INTO visilant_user VALUES('$id','$correo', '$contrasena', '$id_cargo')";

	$verificar_correo = mysqli_query($conexion, "SELECT * FROM visilant_user WHERE correo = '$correo'");


    if(mysqli_num_rows($verificar_correo) > 0){
		echo '<script>
			alert("ESTE NOMBRE DE USUARIO YA ESTA EN USO, UTILICE UNO DIFERENTE");
			window.location="index.php";
		</script>';
       	exit();
   	}     

	$query = mysqli_query($conexion, $sql);
     
	if($query) {
		header("location: index.php");
	};

	mysqli_close($conexion);
?>