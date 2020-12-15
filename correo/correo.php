<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    if (isset($_POST['enviar'])){

        $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'lautarodriguez17@gmail.com';
        $mail->Password   = 'lautarito-93';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
    
        //Recipients
        $mail->setFrom($_POST['email'], $_POST['nombre']);
        $mail->addAddress('lautarodriguez17@gmail.com');
    
        // Content
        $mail->isHTML(true);
        $mail->Subject = 'DE: ' . $_POST['email'];
        $mail->Body    = $_POST['mensaje'] . '<br><br> ' . 'Telefono: ' . $_POST['telefono'];
    
        $mail->send();
        echo '<h2>MENSAJE ENVIADO!</h2>';
        } catch (Exception $e) {
            echo "Erro al enviar: {$mail->ErrorInfo}";
        }
    }
    ?>