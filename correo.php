<?php 
    if (isset($_POST['enviar'])) {
        if (!empty($_POST['nombre']) 
            && !empty($_POST['email']) 
            && !empty($_POST['telefono']) 
            && !empty($_POST['mensaje'])) {
            
            $mail_from = 'lautarodriguez17@gmail.com';
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $telefono = $_POST['telefono'];
            $mensaje = $_POST['mensaje'];
            $header = "From: noreply@example.com" . "\r\n";
            $header.  "Reply-To: noreply@exmaple.com". "\r\n";
            $header.  "X-Mailer: PHP/". phpversion();
            $mail = mail($mail_from,$nombre,$telefono,$mensaje,$header);
            if ($mail) {
                echo "<h2>¡MENSAJE ENVIADO CORRECTAMENTE! </h2>"; 
            } else {
                echo "<h2>¡ERROR EN EL ENVIO! </h2>"; 
            }
        }
    }
?>