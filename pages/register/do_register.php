<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];


$new_user = $bd->prepare("SELECT * FROM user where user = :user and passwd= :pass");

$new_user->bindParam(':user', $user);
$new_user->bindParam(':pass', $pass);
$new_user->execute();
$new = $new_user->rowCount();

if ($new==1){
	echo "FALSE";
}else{
    $reg = $bd->prepare("INSERT INTO user (user, passwd) VALUES (:user, :pass)");
    $reg->bindParam(':user', $user);
    $reg->bindParam(':pass', $pass);
    $reg->execute();
	echo "TRUE";
}



?>
