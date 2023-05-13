<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="" method = "GET">
    <p>INGRESE EL CODIGO DE SU TABLA DE VISITAS</p>
    <input type="search" name = "tabla_bs">
    <input type="submit" name = "buton" value = "BUSCAR">

</form>
    
</body>
</html>

<?php

require "db/conexion_2.php";

if (isset($_GET['buton'])) {
    $tabla_bs = $_GET['tabla_bs'];

    if (isset($_GET['tabla_bs'])) {
        
        $where = "WHERE estado LIKE '%".$tabla_bs."%'";
        
    }
}

header("location: ../ver_visita.php");


?>