<?php 
    $destinatario = 'serujiourutado@gmail.com';

    $correo = $_POST['correo'];
    $asunto = $_POST['asunto'];
    $msg = $_POST['msg'];

    $header = "Enviado desde formulario de contacto Visilant";
    $mensaje = $msg . "\nAtentamente: " . $correo;


    mail($destinatario, $asunto, $mensaje, $header);

    echo '<script> alert("El mensaje fue enviado de manera exitosa"); 
          window.location = "index.php";
          </script>';
 
?>