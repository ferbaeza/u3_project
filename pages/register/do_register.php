<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];
//$mail = $_POST['mail'];
//$phone = $_POST['phone'];


$new_user = $bd->prepare("SELECT * FROM user where user = :user and passwd= :pass");

$new_user->bindParam(':user', $user);
$new_user->bindParam(':pass', $pass);
$new_user->execute();
$new = $new_user->rowCount();


try{
    if ($new==1){
        echo "FALSE";
    }else{
        //$reg = $bd->prepare("INSERT INTO user (user, mail, phone_number, passwd) VALUES (:user, :mail, :phone, :pass)");

        $reg = $bd->prepare("INSERT INTO user (user, passwd) VALUES (:user, :pass)");
        $reg->bindParam(':user', $user);
        $reg->bindParam(':pass', $pass);
        //$reg->bindParam(':mail', $mail);
        //$reg->bindParam(':phone', $phone);

        $reg->execute();
        echo "TRUE";
    }
}catch(exception $e){
    echo $e->getMessage();
}


?>
