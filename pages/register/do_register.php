<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];
$mail = $_POST['mail'];


$bd->prepare("SELECT * FROM user where user = :user and psswd= :pass");

$new_user->bindParam(':user', $user);
$new_user->bindParam(':pass', $pass);
$new_user->execute();

$new = $new_user->rowCount();
if ($new==1){
    echo "<script>alert('NOOOOOOOOOOOO');</script>";
	echo "TRUE";
}else{
    $new_user = $bd->prepare("INSERT INTO user (user, passwd, mail) VALUES (:user,:pass,:mail");
    $new_user ->execute();
	echo "FALSE";
}



?>
