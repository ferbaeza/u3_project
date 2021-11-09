<?php

require_once "../bbdd/conexion.php";
require_once "../utils/response.php";
session_start();
$user= $_SESSION['user_loged'];
$upass=$_SESSION['passwd_loged'];
$umail=$_SESSION['mail_loged'];
$uphone= $_SESSION['phone_loged'];
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
?>