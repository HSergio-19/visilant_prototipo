<?php
    require "conexion_2.php";
 

    if (!empty($_POST['boton'])) {
        if (empty($_POST['nombre']) or empty($_POST['apellido']) or empty($_POST['cedula']) or empty($_POST['telefono']) or empty($_POST['q_visita']) or empty($_POST['tabla']) ) {
           echo'<script>
           alert("LLENE LOS CAMPOS DE MANERA CORRECTA");
           window.location = "../registro_visita.php"; 
               </script>';
        } else {
            
            $nombre = $_POST['nombre'];  
            $apellido = $_POST['apellido'];  
            $cedula = $_POST['cedula'];  
            $q_visita = $_POST['q_visita'];  
            $tabla = $_POST['tabla']; 

            $mysqli_query_createtable = "INSERT INTO visitas (nombre, apellido, cedula, quien_visita , tabla) VALUES ('$nombre', '$apellido', '$cedula', '$q_visita', '$tabla')";
        };

    };
    

    $ejecutar_creaciontb = mysqli_query($conexion, $mysqli_query_createtable);    
    
    
    if($ejecutar_creaciontb){
        echo '<script>
            alert("REGISTRO EXITOSO");
            window.location = "../home.php"; 
        </script>';

    }else{
        echo '<script>
            alert("HA HABIDO UN ERROR, INTENTE NUEVAMENTE");
            window.location = "../registro_visita.php"; 
        </script>';

    };

    mysqli_close($conexion);
    
?>