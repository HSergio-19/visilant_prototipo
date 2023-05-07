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
	<link rel="stylesheet" href="home-style.css">
	<link rel="website icon" type="png" href="../img/icon.png">
    <title>VISILANT</title>
</head>
<body>

	<header>
		<a href = "home.php" class="logo">
            <img src="../img/icon.png" alt="logo.png">
            <h2 class="nombre-sistema">VISILANT</h2>
        </a>

        <nav>
            <a href="cerrar_sesion.php" class = "boton-operacion">Cerrar Sesion</a>
        </nav>
	</header>


	<div class = "titulo">
		<h2 class = "bienvenida">BIENVENIDO A VISILANT</h2>
		<p class = "pregunta">¿Qué acción desea realizar?</p>
	</div>


	<div class = "menu-operaciones">

		<div class = "caja-operaciones">
			<a href="create-table.php">
				<img src="../img/create.png" alt="create.png">
				<h2 class="titulo-operacion">CREAR TABLAS</h2>
			</a>
		</div>
		
		<div class = "caja-operaciones">
			<a href="data-table.php">
				<img src="../img/data.png" alt="data.png">
				<h2 class="titulo-operacion">VISUALIZAR TABLAS</h2>
			</a>
		</div>

		<div class = "caja-operaciones">
			<a href="config-table.php">
				<img src="../img/config.png" alt="config.png">
				<h2 class="titulo-operacion">CONFIGURACIONES</h2>
			</a>
		</div>
	</div>


</body>
</html>