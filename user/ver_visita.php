<?php 
require "../db/conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/ver_visita_style.css">
	<link rel="website icon" type="png" href="../img/icon.png">
    <link rel="stylesheet" href="css/boton_modal.css">
    <title>Visilant</title>
</head>




<body>
<header>
		<a href = "home.php" class="logo">
            <img src="../img/icon.png" alt="logo.png">
            <h2 class="nombre-sistema">VISILANT</h2>
        </a>
        <nav>
            <a href="home.php" class = "logo">Regresar</a>
        </nav>

</header>

<div class = "boton-modal">

    <label for="btn-modal">
        AYUDA
    </label>

</div>

<input type="checkbox" id="btn-modal">

<div class = "container-modal">
    <div class = "content-modal">
        <h2>GUIA DE AYUDA</h2>
        <p>Debes ingresar el nombre de tu urbanizacion en el campo vacion para visualizar sus visitas. Luego presionas consultar y listo.</p>

        <div class="btn-cerrar">
            <label for="btn-modal">
                Cerrar
            </label>
        </div>
    </div>
    <label for="btn-modal" class="cerrar-modal"></label>
</div>

<h1 class = "titulo_lista">LISTA DE VISITAS</h1>

<div class = "center">
<form action="" method="POST">
    <p class = "ayuda">INGRESE EL NOMBRE DE SU URBANIZACION</p>
    <input type="text" name="busqueda" class="input-campo">
    <input type="submit" name="enviar" value="CONSULTAR" class="input-boton">


</form>

</div>
     <div class = "lista_visita">
        <table>
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>CEDULA</th>
                    <th>ESTA VISITANDO A</th>
                    <th>ESTADO</th>
                </tr>
            </thead>
            <tbody>
                 <?php 

                 if(!empty($_POST['enviar'])) {
                    if (empty($_POST['busqueda'])){
                        echo'<script>
                        alert("NO SE ENCONTRO UNA TABLA CON ESAS ESPECIFICACIONES");
                        window.location = "ver_visita.php"; 
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
                 </tr>
                 <?php endwhile;}}?>
            </tbody>
        </table>
    </div>
</body>
</html>