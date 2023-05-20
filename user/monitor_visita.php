<?php 
require "../db/conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="website icon" type="png" href="../img/icon.png">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/monitor_style.css">
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
    <h2 class = "titulo_lista">MODIFICAR VISITAS</h2>
    <p class = "titulo_lista">Puedes modificar los datos de tus visitas o finalizarlas</p>
    <form action="" method="POST">
        <p class = "ayuda">INGRESE EL NOMBRE DE LA TABLA QUE DESEA CONSULTAR</p>
        <input type="text" name="busqueda" class="campo">
        <input type="submit" name="enviar" value="CONSULTAR" class="boton">
    </form>
     <div class = "lista_visita">
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CEDULA</th>
                    <th>VISITA A</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                 <?php 
                 
                 if(!empty($_POST['enviar'])) {
                    if (empty($_POST['busqueda'])){
                        echo'<script>
                        alert("NO SE ENCONTRO UNA TABLA CON ESAS ESPECIFICACIONES");
                        window.location = "monitor_visita.php"; 
                            </script>';

                    }else {

                        $busqueda = $_POST['busqueda'];

                        $query_busqueda = "SELECT * FROM visitas WHERE tabla LIKE '%$busqueda%'";
    
                        $query = mysqli_query($conexion, $query_busqueda);
    
                        while($row = mysqli_fetch_array($query)):

                   
                ?>       
                <tr>
                <th><?= $row["nombre"]?></th>
                    <th><?= $row["apellido"]?></th>
                    <th><?= $row["cedula"]?></th>
                    <th><?= $row["quien_visita"]?></th>
                    <th><?= $row["estado"]?></th>

                    <th><a class = "boton" href="monitor_editar_visita.php?id=<?= $row['id'] ?>">EDITAR</a></th>
                    <th><a class = "boton" href="db/eliminar.php?id=<?= $row['id'] ?>">ELIMINAR</a></th>
                    <th><a class = "boton" href="db/finalizar.php?id=<?= $row['id'] ?>">FINALIZAR</a></th>
                </tr>
                <?php endwhile; }}?>
            </tbody>
        </table>
    </div>
</body>
</html>

