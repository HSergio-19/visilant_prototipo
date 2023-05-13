<?php
session_start();
error_reporting(0);

$var_sesion_correo = $_SESSION['correo'];

if ($var_sesion_correo == null or $var_sesion_correo == '') {

	echo '<script>
		alert("NO TIENES AUTORIZACION, REGISTRATE PRIMERO");
        window.location = "../index.php"; 
    </script>';
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
	<link rel="stylesheet" href="css/home_style.css">
	<link rel="stylesheet" href="css/header_style.css">
	<link rel="website icon" type="png" href="../img/icon.png">
    <title>Visilant</title>
</head>
<body>

<header>
		<a href = "home.php" class="logo">
            <img src="../img/icon.png" alt="logo.png" class = "icon-logo">
            <h2 class="nombre-sistema">VISILANT</h2>
        </a>

        <nav>
            <a href="db/cerrar_sesion.php" class = "boton-operacion">Cerrar Sesion</a>
        </nav>
</header>

	<div class = "menu-operaciones">
		<div class = "caja-operaciones">
			<a href="registro_visita.php" class = "titulo_boton">
				<img src="../img/create.png" alt="create.png" class = "icon-boton">
				<h2 class="titulo-operacion">REGISTRAR VISITA</h2>
			</a>
		</div>
		
		<div class = "caja-operaciones">
			<a href="ver_visita.php" class = "titulo_boton">
				<img src="../img/visit.png" alt="visit.png" class = "icon-boton">
				<h2 class="titulo-operacion">VISUALIZAR VISITAS</h2>
			</a>
		</div>

		<div class = "caja-operaciones">
			<a href="monitor_visita.php" class = "titulo_boton">
				<img src="../img/config.png" alt="config.png" class = "icon-boton">
				<h2 class="titulo-operacion">MONITOREAR VISITAS</h2>
			</a>
		</div>
	</div>


</body>
</html>