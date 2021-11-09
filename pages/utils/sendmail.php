<?php
/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require './mail/Exception.php';
require './mail/PHPMailer.php';
require './mail/SMTP.php';
*/

$shopCart = json_decode($_COOKIE['shopCart']);
var_dump($shopCart);

$array = $definitiveArray;
foreach($array as $x){
    echo $x->name;
}
/*
        'id' => $g->id,
        'quantity' => $g->quantity,
        'name' => $x['name'],
        'price'=> $x['price'],
        'total_price'=> $x['price'] * $g->quantity




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

    //Recipients
    $mail->setFrom('cotoveta24@gmail.com', 'U3_Project');
    $mail->addAddress('baezeta@gmail.com', 'Joe User');     
    
    $mail->addBCC('cotoveta24@gmail.com');
    $mail->isHTML(true);                                 
    $mail->Subject = 'Pedido U3_Project';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Order has been sent';
} catch (Exception $e) {
    echo "Order could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


*/