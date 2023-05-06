<!--FUNCION DE INGRESAR NUEVO USUARIO AL SISTEMA-->

<?php 
	require "../database/conexion.php";
	
	$id = null;
	$correo = $_POST["correo"];
	$contrasena = $_POST["contrasena"];
			
	$sql = "INSERT INTO visilant_db VALUES('$id','$correo', '$contrasena')";

	$id_increment = "ALTER TABLE visilant_db AUTO_INCREMENT=1";

	$verificar_correo = mysqli_query($conexion, "SELECT * FROM visilant_db WHERE correo = '$correo'");


    if(mysqli_num_rows($verificar_correo) > 0){
		echo '<script>
			alert("ESTE NOMBRE DE USUARIO YA ESTA EN USO, UTILICE UNO DIFERENTE");
			window.location="index.php";
		</script>';
       	exit();
   	}     

	$query = mysqli_query($conexion, $sql);
     
	if($query && $query2) {
		header("location: index.php");
	} else {
		echo 'NO FUNCIONA MANO';
	};

	mysqli_close($conexion);
?>