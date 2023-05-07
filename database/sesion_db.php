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

if ($filas){
    header("location:../usuario/home.php");
} else {

    echo'<script>
    alert("INGRESE LOS DATOS CORRECTOS POR FAVOR");
    window.location="../index.php";
</script>';

}


mysqli_free_result($resultado);
mysqli_close($conexion);
?>