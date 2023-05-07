<!--FUNCION DE INICIO DE SESION DE USUARIO EN LA PAGINA-->

<?php
require "conexion.php";

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

session_start();
$_SESSION['correo'] = $correo;
$_SESSION['contrasena'] = $contrasena;


$consulta = "SELECT * FROM visilant_db WHERE correo = '$correo' and contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);


$filas = mysqli_fetch_array($resultado);

if ($filas ['correo'] == 'admin@gmail.com') {

    header("location:../admin/index.php");

} else if ($filas ['correo'] != 'admin@gmail.com') {

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