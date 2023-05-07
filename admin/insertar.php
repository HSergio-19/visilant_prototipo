<!--FUNCION DE INGRESAR NUEVO USUARIO AL SISTEMA-->

<?php 
	require "../database/conexion.php";
	
	$id = null;
	$correo = $_POST["correo"];
	$contrasena = $_POST["contrasena"];
	$cargo = 2;
			
	$sql = "INSERT INTO visilant_db VALUES('$id','$correo', '$contrasena', '$cargo')";
	
	$verificar_correo = mysqli_query($conexion, "SELECT * FROM visilant_db WHERE correo = '$correo'");


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
	} else {
		echo 'ERROR, INTENTE EN OTRO MOMENTO';
	};

	mysqli_close($conexion);
?>