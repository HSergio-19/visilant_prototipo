<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="website icon" type="png" href="img/icon.png">
    <title>Visilant - Sistema de Control de Visitas</title>
</head>

<body>

    <!--EXTENSION DEL HEADER DE LA PAGINA USANDO REQUIRE--> 
    
    <?php require "header.php" ?> 

    <!--TITULO Y DESCRIPCION PRINCIPAL DE LA PAGINA--> 
      
    <div class = "index-titulo" >
        <h1>CONTROL Y GESTIÓN DE <br> VISITAS EN URBANIZACIONES</h1>
        <p>Monitoreo en tiempo real sobre las visitas de tu urbanización, <br> manteniendo el control y seguridad.</p>
    </div>
    
    <br> <br> <br>

    <!--INFORMACION RELEVANTE DE SERVICIOS DE LA PAGINA, VERSION RESUMIDA--> 

    <div class = "info-pagina">
        <div class = "info-pagina-text">
            <h1>CONTROL</h1>
            <p>El Sistema de Gestión y Control de Visitas "Visilant" contara con una regulación sobre las visitas, durante la entrada se mantiene un proceso en tiempo real sobre la duración y estadia de visita hasta su finalización.</p>
        </div>

        <div class = "info-pagina-img">
            <img src="img/registro.png" alt="registro.png">
        </div>
    </div>
         
    <br> <br> <br>

    <div class = "info-pagina">
        <div class = "info-pagina-img">
            <img src="img/vigilante.png" alt="vigilante.png">
        </div>

        <div class = "info-pagina-text">
            <h1>SEGURIDAD</h1>
            <p>El Sistema de Gestión y Control de Visitas "Visilant" proporciona la capacidad de mantener en orden y control de manera segura las visitas regularizadas durante la jornada del dia y obtener un ambiente libre de problemas de organizacion o descontrol.</p>
        </div>
    </div>

    <br> <br> <br>
      
</body>

 <!--EXTENSION DEL FOOTER DE LA PAGINA USANDO REQUIRE--> 

 <footer class = "footer">

    <div class = "contacto" id = "contacto">
        <h3 class = "titulo-contacto">CONTACTANOS</h3>

        <form action="funtions/contacto.php" method = "POST" class = "form-contacto">
            <input type="text" class = "input-contacto" placeholder = "CORREO" name = "correo"> <br>
            <input type="text" class = "input-contacto" placeholder = "ASUNTO" name = "asunto"> <br>
            <textarea class = "input-contacto" placeholder = "INGRESE SU COMENTARIO" name = "msg"></textarea> <br>    
            <input type="submit" class = "input-boton" value = "ENVIAR">
        </form>

    </div>
</footer>

</html> 