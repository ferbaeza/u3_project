<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './mail/Exception.php';
require './mail/PHPMailer.php';
require './mail/SMTP.php';
require_once './info_order.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'cotoveta24@gmail.com';                     
    $mail->Password   = 'cotoveta024';                              
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;  
    $mail->CharSet = "UTF-8";                                  

    //Recipients
    $mail->setFrom('cotoveta24@gmail.com', 'U3_Project');
    $mail->addAddress('fbaezahurtado@gmail.com', 'Copy_Order');     
    
    $text=finalinvoice();

    $mail->addBCC('cotoveta24@gmail.com');
    $mail->isHTML(true);                                 
    $mail->Subject = 'Pedido U3_Project';
    $mail->Body    = 'Important information from your <b>Order</b><br>'.$text;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Order has been sent';
} catch (Exception $e) {
    echo "Order could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


