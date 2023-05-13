<?php require "db/conexion_2.php";

$sql = "SELECT * FROM visitas";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="website icon" type="png" href="../img/icon.png">
    <link rel="stylesheet" href="css/header_style.css">
    <title>Visilant</title>
</head>

<header>
		<a href = "home.php" class="logo">
            <img src="../img/icon.png" alt="logo.png">
            <h2 class="nombre-sistema">VISILANT</h2>
        </a>

        <nav>
            <a href="home.php" class = "boton-operacion">Regresar</a>
        </nav>


</header>

<body>
     <div>
        <h2>LISTA DE ESTUDIANTES</h2>
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CEDULA</th>
                    <th>TELEFONO</th>
                    <th>¿A QUIEN VISITA?</th>
                    <th>MOTIVO</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                 <?php while($row = mysqli_fetch_array($query)): ?>   
                <tr>
                <th><?= $row["nombre"]?></th>
                    <th><?= $row["apellido"]?></th>
                    <th><?= $row["cedula"]?></th>
                    <th><?= $row["telefono"]?></th>
                    <th><?= $row["quien_visita"]?></th>
                    <th><?= $row["motivo"]?></th>
                    <th><?= $row["estado"]?></th>

                    <th><a href="editar.php?id=<?= $row['id'] ?>">EDITAR</a></th>
                    <th><a href="db/eliminar.php?id=<?= $row['id'] ?>">ELIMINAR</a></th>
                    <th><a href="db/finalizar.php?id=<?= $row['id'] ?>">FINALIZAR VISITA</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

