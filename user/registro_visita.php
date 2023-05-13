<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header_style.css">
    <link rel="stylesheet" href="css/registro_style.css">
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

    <h1 class = "titulo_descripcion_h">INGRESE LOS DATOS DE LA VISITA</h1>
    <p class = "titulo_descripcion_p">Debera llenar los campos para agregar su visita a la tabla</p>

<div class = "container">

    <form action="db/registro_visita_db.php" Method = "POST" class = "form-registro">

    <div class = "seccion_1">

        <p class = "titulo_campo"><b>NOMBRE:</b></p>
        <input type="text" name = "nombre" class = "input_campo">

        <p class = "titulo_campo"><b>APELLIDO:</b></p>
        <input type="text" name = "apellido" class = "input_campo">

        <p class = "titulo_campo"><b>CEDULA:</b></p>
        <input type="number" name = "cedula" class = "input_campo">

        <p class = "titulo_campo"><b>TELEFONO:</b></p>
        <input type="number" name = "telefono" class = "input_campo">

    </div>

    <div class = "seccion_2">


        <p class = "titulo_campo"><b>TABLA DE VISITA:</b></p>
        <input type="text" name = "tabla" class = "input_campo">

        <p class = "titulo_campo"><b>¿A QUIEN VISITA?</b></p>
        <input type="text" name = "q_visita" class = "input_campo">

        <p class = "titulo_campo"><b>MOTIVO DE VISITA:</b></p>
        <input type="text" name = "motivo" class = "input_campo">

    </div>

    <div class = "seccion_3">        
        <input type="submit" name = "boton" value = "Registrar" class = "boton-registro">
    </div>

    </form>

</div>


 
    
</body>
</html>