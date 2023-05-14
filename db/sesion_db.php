<!--FUNCION DE INICIO DE SESION DE USUARIO EN LA PAGINA-->
<?php
require "conexion.php";

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['correo'] = $correo;


$consulta = "SELECT * FROM visilant WHERE correo = '$correo' and contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);


$filas = mysqli_num_rows($resultado);

if ($filas > 0){
    echo '<script>
        window.location = "../user/home.php"; 
    </script>';

} else {

    echo '<script>
    alert("ERROR, INGRESE LOS DATOS CORRECTOS");
        window.location = "../sesion.php"; 
    </script>';

}


mysqli_free_result($resultado);
mysqli_close($conexion);
?>