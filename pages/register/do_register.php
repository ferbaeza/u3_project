<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];


$bd->prepare("SELECT * FROM user where user = :user and psswd= :pass");

$new_user->bindParam(':user', $user);
$new_user->bindParam(':pass', $pass);
$new_user->execute();

$new = $new_user->rowCount();
if ($new==1){
	echo "TRUE";
}else{
    $bd->prepare("INSERT INTO user (user, passwd, mail) VALUES (:user,:pass,:mail");
    $bd->execute();
	echo "FALSE";
}



?>
