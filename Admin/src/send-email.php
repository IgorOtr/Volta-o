<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'db/connect.php';
$mail = new PHPMailer(true);

if (isset($_POST['send-email'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $sector = $_POST['sector'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    try {

        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.kinghost.net';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'igor.muniz@quick.com.br';                     //SMTP username
        $mail->Password   = 'Igor@123';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('igor.muniz@quick.com.br', 'Igor Otero');
        $mail->addAddress($email, $name);

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        $_SESSION['action_success'] = '
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            A mensagem foi enviada <strong>com sucesso!</strong>.
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>';
        
        header('Location:'.SITE_URL.'contact.php');

    } catch (Exception $e) {

        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}