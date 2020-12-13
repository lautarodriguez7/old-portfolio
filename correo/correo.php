<?php 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    if (isset($_POST['enviar'])){

        $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'lautarodriguez17@gmail.com';                     // SMTP username
        $mail->Password   = 'lautarito-93';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom($_POST['email'], $_POST['nombre']);
        $mail->addAddress('lautarodriguez17@gmail.com');     // Add a recipient
    
        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'DE: ' . $_POST['email'];
        $mail->Body    = $_POST['mensaje'] . '<br><br> ' . 'Telefono: ' . $_POST['telefono'];
    
        $mail->send();
        echo '<h2>MENSAJE ENVIADO!</h2>';
        } catch (Exception $e) {
            echo "Erro al enviar: {$mail->ErrorInfo}";
        }
    }
    ?>