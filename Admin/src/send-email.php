<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'db/connect.php';
$mail = new PHPMailer(true);

if (isset($_POST['send-email'])) {

    $email_sector = $_POST['sector'];

    switch ($email_sector) {
        case '1':
            
            $email_sector = 'administracao@voltaco.com.br';
            break;
        
        case '2':

            $email_sector = 'imprensa@voltaco.com.br';
            break;

        case '3':

            $email_sector = 'base@voltaco.com.br';
            break;

        case '4':

            $email_sector = 'contato@voltaco.com.br';
            break;

        case '5':

            $email_sector = 'contato@voltaco.com.br';
            break;

        default:
            # code...
            break;
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $sector = $_POST['sector'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // echo $email_sector;
    // die();

    try {

        include './email_body.php';

        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'support@quick.com.br';                     //SMTP username
        $mail->Password   = 'Quick2024#';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('support@quick.com.br', 'Envio de Emails Quick');
        $mail->addAddress($email_sector);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = $email_body;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        $_SESSION['action_success'] = '
                <div class="row mb-5 mt-5">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            A mensagem foi enviada <strong>com sucesso!</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>';
        
        echo '<script>window.location.href='.SITE_URL.'contact.php</script>';

    } catch (Exception $e) {

        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}