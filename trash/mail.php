<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './mailUtils/Exception.php';
require './mailUtils/PHPMailer.php';
require './mailUtils/SMTP.php';

require_once '../pages/utils/sesion.php';

//Load Composer's autoloader
//require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cotoveta24@gmail.com';                     //SMTP username
    $mail->Password   = 'cotoveta024';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('cotoveta24@gmail.com', 'U3_Project');
    $mail->addAddress($umail, $user);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addBCC('cotoveta24@gmail.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Pedido U3_Project'.$user;
    $mail->Body    = '<h3>This is your order</h3><h1>'.$user.'</h1><b>Order from U3_Project</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Order has been sent';
} catch (Exception $e) {
    echo "Order could not be sent. Mailer Error: {$mail->ErrorInfo}";
}