<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/registro_style.css">
    <link rel="stylesheet" href="css/boton_modal.css">
	<link rel="website icon" type="png" href="../img/icon.png">
    <title>Visilant</title>
</head>
<body>

<header>
		<a href = "home.php" class="logo">
            <img src="../img/icon.png" alt="logo.png">
            <h2 class="nombre-sistema">VISILANT</h2>
        </a>

        <nav>
            <a href="home.php" class = "boton-operacion">Regresar</a>
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
        <p>Datos que se deben rellenar en los campos: <br> - <b>Nombre:</b> Debe colocar el nombre del visitante. <br>- <b>Apellido:</b> Debe colocar el apellido del visitante. <br> - <b>Cedula:</b> Debe colocar la cedula del visitante. <br> - <b>Urbanizacion:</b> Se debe colocar el nombre de la urbanizacion encargada de gestionar. <br> - <b>¿A quien visita?:</b> Se debe colocar el nombre de la persona que recibe la visita.</p>

        <div class="btn-cerrar">
            <label for="btn-modal">
                Cerrar
            </label>
        </div>
    </div>
    <label for="btn-modal" class="cerrar-modal"></label>
</div>
 

    <h1 class = "titulo_descripcion_h">INGRESE LOS DATOS DE LA VISITA</h1>
    <p class = "titulo_descripcion_p">Debe llenar los campos para agregar su visita a la tabla</p>

<div class = "container">

    <form action="db/registro_visita_db.php" Method = "POST" class = "form-registro">

        <div class = "seccion_1">

            <p class = "titulo_campo"><b>NOMBRE:</b></p>
            <input type="text" name = "nombre" class = "input_campo">

            <p class = "titulo_campo"><b>APELLIDO:</b></p>
            <input type="text" name = "apellido" class = "input_campo">

            <p class = "titulo_campo"><b>CEDULA:</b></p>
            <input type="text" name = "cedula" class = "input_campo">

        </div>

        <div class = "seccion_2">

            <p class = "titulo_campo"><b>URBANIZACION:</b></p>
            <input type="text" name = "tabla" class = "input_campo">

            <p class = "titulo_campo"><b>¿A QUIEN VISITA?</b></p>
            <input type="text" name = "q_visita" class = "input_campo">

          </div>

        <div class = "seccion_3">        
            <input type="submit" name = "boton" value = "Registrar" class = "boton-registro">
        </div>

    </form>
</div>



    
</body>
</html>