<!--FUNCION DE CERRAR SESION DE CUENTA-->
<?php
	session_start();
	session_destroy();
	echo'<script>
    alert("HAS CERRADO SESION");
    window.location="../index.php";
    </script>';
?>