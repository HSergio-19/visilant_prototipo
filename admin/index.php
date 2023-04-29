<?php

require "conexion.php";

//SEGURIDAD DE PAGINACION DE INICIO DE SESION
session_start();
error_reporting();
$validar_sesion = $_SESSION['correo'];


if($validar_sesion==null || $validar_sesion==''){
	echo '
		<script>
			alert("POR FAVOR DEBES INICIAR SESION");
			window.location = "../index.php"; 
		</script>
	';
	session_destroy();
	die();

}

$sql = "SELECT * FROM visilant_user";

$query = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/admin.css">
    <title>Visilant - Admin</title>
</head>
<body>


        <header>
            <h1>CRUD DE ADMINISTRADOR</h1>
            <a href="cerrar_sesion.php" class = "bto-cs">CERRAR SESION</a>
        </header>

    <div id = "general">

        <div class = "contenedor">
            <form action="insertar.php" class = "crud" method="POST">
                <p>INGRESAR CORREO</p>
                <input type="text" class = "campo" name="correo" placeholder = "Correo" > <br>
                <p>INGRESASR CONTRASEÑA</p>
                <input type="text" class = "campo" name="contrasena" placeholder = "Contraseña"> <br>
                <p>INGRESAR CARGO <br> (1 = administrador) o (2 = usuario)</p>
                <input type="text" class = "campo" name="id_cargo" placeholder = "Cargo"> <br>
                <input type="submit" class = "boton" value="Crear Usuario"> <br>
            </form>
        </div>
        
        <div class = "lista">
            <h2>LISTA DE REGISTRADOS</h2>
            <table>
                <thead>
                    <tr>
                        <th class = "titulo" >ID</th>
                        <th class = "titulo" >CORREO</th>
                        <th class = "titulo" >CONTRASEÑA</th>
                        <th class = "titulo" >CARGO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_array($query)): ?>   
                    <tr>
                        <th><?= $row["id"]?></th>
                        <th><?= $row["correo"]?></th>
                        <th><?= $row["contrasena"]?></th>
                        <th><?= $row["id_cargo"]?></th>


                        <th><a href="editar.php?id=<?= $row['id'] ?>">EDITAR</a></th>
                        <th><a href="eliminar.php?id=<?= $row['id'] ?>">ELIMINAR</a></th>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>

    </div>
    
    


</body>
</html>

