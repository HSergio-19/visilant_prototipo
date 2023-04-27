<?php
require "conexion.php";

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['correo']=$correo;


$consulta = "SELECT * FROM visilant_user WHERE correo = '$correo' and contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);


$filas = mysqli_num_rows($resultado);
if ($filas) {
    header("location:../home/home.php");
} else {
    echo'<script>
    alert("LOS DATOS INGRESADOS SON INCORRECTOS O ESTE USUARIO NO SE ENCUENTRA REGISTRADO, LE INVITAMOS A FORMAR PARTE DE NUESTRA COMUNIDAD PRIMERO ANTES DE INGRESAR");
    window.location="../index.php";
</script>';
}


mysqli_free_result($resultado);
mysqli_close($conexion);
?>