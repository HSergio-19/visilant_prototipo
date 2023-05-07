<!--FUNCION DE REGISTRO DE USUARIO EN LA PAGINA-->

<?php
require "conexion.php";

if (!empty($_POST['boton-registro'])) {
    if (empty($_POST['correo']) or empty($_POST['contrasena'])) {
       echo'<script>
       alert("LLENE LOS CAMPOS DE MANERA CORRECTA");
       window.location="../registro.php";
   </script>';
    } else {
        
        $correo = $_POST["correo"];
        $contrasena = $_POST["contrasena"];
        
        $query = "INSERT INTO visilant_db(correo, contrasena)
                  VALUES('$correo', '$contrasena')"; 
    };

};





$verificar_correo = mysqli_query($conexion, "SELECT * FROM visilant_db WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '<script>
            alert("ESTE NOMBRE DE USUARIO YA ESTA EN USO, UTILICE UNO DIFERENTE");
            window.location="../registro.php";
        </script>';
        exit();
    }          

    $ejecutar = mysqli_query($conexion, $query);       


    if($ejecutar){
        echo '<script>
                alert("USUARIO REGISTRADO EXITOSAMENTE");
                window.location = "../index.php";
        </script>';
    }else{
        echo '<script>
                alert("HA OCURRIDO UN ERROR, INTENTELO DE NUEVO");
                window.location = "../index.php";
        </script>';
    }
    mysqli_close($conexion);


?>