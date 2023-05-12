<?php
require "conexion.php";

if (!empty($_POST['boton-registro'])) {
    if (empty($_POST['correo']) or empty($_POST['contrasena'])) {
       echo'<script>
       alert("LLENE LOS CAMPOS DE MANERA CORRECTA");
       window.location = "../registro.php"; 
           </script>';
    } else {
        
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        
        $query = "INSERT INTO user(correo, contrasena) VALUES ('$correo', '$contrasena')"; 
    };

};

$verificar_correo = mysqli_query($conexion, "SELECT * FROM user WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script> 
            alert("Este nombre de usuario Ya esta en uso"); 
            window.location = "../registro.php"; 
        
        </script>';

        //header("location: ../registro.php");
        //exit(); 
    }          

    $ejecutar = mysqli_query($conexion, $query);       


    if($ejecutar){
        echo '<script>
            alert("REGISTRO EXITOSO");
            window.location = "../index.php"; 
        </script>';


        //header("location: ../index.php");
    }else{
        echo '<script>
            alert("HA HABIDO UN ERROR, INTENTE NUEVAMENTE");
            window.location = "../registro.php"; 
        </script>';


        //header("location: ../registro.php");
    }
    mysqli_close($conexion);

?>