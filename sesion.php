<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="website icon" type="png" href="img/icon.png">
    <title>Visilant - Iniciar Sesion</title>
</head>
<body>

    <!--EXTENSION DEL HEADER DE LA PAGINA USANDO REQUIRE-->

   <?php require "header.php"?>

    <!--ENCABEZADO DEL FORMULARIO-->

    <div class = "titulo-descripcion">
        <h1>INICIA SESION</h1>
        <h4>MAnten el orden de tus visitas y visualiza su control en tiempo real</h4>
    </div>

    <!--FORMULARIO DE REGISTRO-->
          
    <form class = "form-registro" action="db/sesion_db.php" method="POST">
            <p> <b>CORREO</b></p>
            <input type="email" class = "campo" placeholder="CORREO ELECTRONICO" name="correo" require=""> <br>
            <p><b>CONTRASEÑA</b></p>
            <input type="password" class = "campo" placeholder="CONTRASEÑA" name="contrasena" require=""> <br>
                        
            <input type="submit" name = "boton-sesion"  class = "boton" value="INICIAR SESION">
    </form>

    
</body>
</html>