<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="website icon" type="png" href="img/icon.png">
    <title>Visilant - Iniciar Sesion</title>
</head>
<body>

   <?php require "header.php"?>



    <!--FORMULARIO DE REGISTRO -->

    <div class = "titulo-descripcion">
        <h1>INICIA SESION</h1>
        <h4>MAnten el orden de tus visitas y visualiza su control en tiempo real</h4>
    </div>
          
    <form class = "form-registro" action="database/sesion_db.php" method="POST">
            <p> <b>CORREO</b></p>
            <input type="email" class = "campo" placeholder="CORREO ELECTRONICO" name="correo"> <br>
            <p><b>CONTRASEÑA</b></p>
            <input type="password" id = "input" class = "campo" placeholder="CONTRASEÑA" name="contrasena"> <br>
            <img src="img/show.png" alt="js/code.js" id = "eye">
            
            <input type="submit" name = "boton-sesion"  class = "boton" value="INICIAR SESION">
    </form>

    
</body>
</html>