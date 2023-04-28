<?php require "conexion.php";

$sql = "SELECT * FROM visilant_user";

$query = mysqli_query($conexion, $sql);

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
        <form action="insertar.php" method="POST">
            <input type="text" name="correo" placeholder = "Correo" >
            <input type="text" name="contrasena" placeholder = "Contraseña">
            <input type="submit" value="Crear">
        </form>
    </div>
    

    <div>
        <h2>LISTA DE REGISTRADOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Correo</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                 <?php while($row = mysqli_fetch_array($query)): ?>   
                <tr>
                    <th><?= $row["id"]?></th>
                    <th><?= $row["correo"]?></th>
                    <th><?= $row["contrasena"]?></th>

                    <th><a href="editar.php?id=<?= $row['id'] ?>">EDITAR</a></th>
                    <th><a href="eliminar.php?id=<?= $row['id'] ?>">ELIMINAR</a></th>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

