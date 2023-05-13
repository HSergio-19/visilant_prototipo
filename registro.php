<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="website icon" type="png" href="img/icon.png">
    <title>Visilant - Registro</title>
</head>
<body>

    <!--EXTENSION DEL HEADER DE LA PAGINA USANDO REQUIRE-->

   <?php require "header.php"?>

    <!--ENCABEZADO DEL FORMULARIO-->

    <div class = "titulo-descripcion">
        <h1>REGISTRATE AHORA</h1>
        <h4>Prueba las herramientas que ofrecemos para gestionar y controlar las visitas en tu urbanizacion.</h4>
    </div>

    <!--FORMULARIO DE REGISTRO -->
          
    <form class = "form-registro" action="db/registro_db.php" method="POST">
            <p><b>CORREO</b></p>
            <input type="email" class = "campo" placeholder="CORREO ELECTRONICO" name="correo" require=""> <br>
            <p><b>CONTRASEÑA</b></p>
            <input type="password" class = "campo" placeholder="CONTRASEÑA" name="contrasena" require=""> <br>
            
            <input type="submit" name = "boton-registro"  class = "boton" value="REGISTRARSE">
    </form>

    
</body>
</html>