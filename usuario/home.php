<?php
//CONEXION CON LA BASE DE DATOS
require "../database/conexion.php";

//SEGURIDAD DE PAGINACION DE INICIO DE SESION
session_start();
error_reporting();
$validar_sesion = $_SESSION['correo'];
$validar_contrasena = $_SESSION['contrasena'];

//VALIDAR SI INGRESO UN CORREO EXISTENTE CORRECTO O NINGUNO 
if($validar_sesion==null || $validar_sesion=='' || $validar_contrasena==null || $validar_contrasena==''){
	echo '
		<script>
			alert("POR FAVOR INGRESE LOS DATOS CORRECTOS");
			window.location = "../index.php"; 
		</script>
	';
	session_destroy();
	die();
};
?>

<!--INICIO DEL HOME DE LA PAGINA CON CUENTA QUE INICIO SESION-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISILANT</title>
</head>
<body>
    <h1>CONEXION DE INICIO DE SESION EXITOSA</h1>
	<h1>SISTEMA EN CONSTRUCCION</h1>

    <a href="cerrar_sesion.php">CERRAR SESION</a>
</body>
</html>