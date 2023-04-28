<?php 
    require "conexion.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM visilant_user WHERE id='$id'";
	$query = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visilant - Admin</title>
</head>
<body>

    <div>
        <form action="actualizar.php" method="POST">
            <input type="hidden" name="id" value="<?= $row['id']?>">
            <input type="text" name="correo" placeholder = "Correo" value="<?= $row['correo']?>">
            <input type="text" name="contrasena" placeholder = "Contrasena" value="<?= $row['contrasena']?>">
            <input type="submit" value="actualizar">
        </form>
    </div>
    
</body>
</html>