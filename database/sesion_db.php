<?php
require "conexion.php";

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
session_start();
$_SESSION['correo']=$correo;


$consulta = "SELECT * FROM visilant_user WHERE correo = '$correo' and contrasena = '$contrasena'";
$resultado = mysqli_query($conexion, $consulta);


$filas = mysqli_fetch_array($resultado);

if ($filas ['id_cargo'] == 2) {

    header("location:../usuario/home.php");

} else if ($filas ['id_cargo']==1) {

    header("location:../admin/index.php");

} else {

    echo'<script>
    alert("INGRESE LOS DATOS CORRECTOS POR FAVOR");
    window.location="../index.php";
</script>';

}


mysqli_free_result($resultado);
mysqli_close($conexion);
?>