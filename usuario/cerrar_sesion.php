<!--FUNCION DE CERRAR SESION DE CUENTA-->
<?php
	session_start();
	session_destroy();
	header("location: ../index.php");
?>