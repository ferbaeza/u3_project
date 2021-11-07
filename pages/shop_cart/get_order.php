<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";
session_start();
$_SESSION['user_loged']=$user;
$_SESSION['passwd_loged']=$upass;
$_SESSION['mail_loged']=$umail;
$_SESSION['phone_loged']=$uphone;

var_dump($umail);

try {
    $userinfo=[];
    if(isset($_SESSION['user_loged'])){
        $userinfo=[
            "name" =>$user,
            "email" =>$umail,
            "phone" =>$uphone,
        ];
    }


echo getResponse("OK", "Cokkie", $userinfo);
} catch (Exception $e) {
echo getResponse("KO", "NOT cookie set");
}

