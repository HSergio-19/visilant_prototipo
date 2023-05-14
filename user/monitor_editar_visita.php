<?php 
    require "db/conexion_2.php";

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
    <link rel="stylesheet" href="css/editar_style.css">
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

    <div class = "campo_edit">
        <p>Nombre</p>
        <p>Apellido</p>
        <p>Cedula</p>
        <p>¿A quien visita?</p>
    </div>

    <form action="db/actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="nombre" placeholder = "Nombre" value="<?= $row['nombre']?>">
            <input type="text" name="apellido" placeholder = "Apellido" value="<?= $row['apellido']?>">
            <input type="text" name="cedula" placeholder = "Cedula" value="<?= $row['cedula']?>">
            <input type="text" name="q_visita" placeholder = "¿A quien visita?" value="<?= $row['quien_visita']?>">
            <input type="submit" value="actualizar">
        </form>
</body>
</html>