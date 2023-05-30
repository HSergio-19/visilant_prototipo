<?php 
    require "../db/conexion.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM visitas WHERE id='$id'";
	$query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/editar_monitor.css">
	<link rel="website icon" type="png" href="../img/icon.png">
    <title>Visilant</title>
</head>
<body>

<header>
		<a href = "home.php" class="logo">
            <img src="../img/icon.png" alt="logo.png">
            <h2 class="nombre-sistema">VISILANT</h2>
        </a>

        <nav>
            <a href="home.php" class = "boton-operacion">Regresar</a>
        </nav>
</header>

<h2>EDITAR DATOS</h2>
<p class="decripcion">Puedes editar los datos de tu visita, como el nombre o apellido.</p>

    <form action="db/actualizar.php" method="POST">
        <div class = "seccion_1">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <p class="titulo">NOMBRE <input type="text" name="nombre" placeholder = "Nombre" value="<?= $row['nombre']?>"></p>
            
            <p class="titulo">APELLIDO <input type="text" name="apellido" placeholder = "Apellido" value="<?= $row['apellido']?>"></p>
            
            <p class="titulo">CEDULA <input type="text" name="cedula" placeholder = "Cedula" value="<?= $row['cedula']?>"></p>
         
            <p class="titulo">¿A QUIEN VISITA? <input type="text" name="q_visita" placeholder = "¿A quien visita?" value="<?= $row['quien_visita']?>"></p>
                       
            <input type="submit" class="boton" value="ACTUALIZAR">
        </div>
    </form>

   
</body>
</html>