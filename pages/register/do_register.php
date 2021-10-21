<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];
<<<<<<< HEAD
=======
$mail = $_POST['mail'];
>>>>>>> 6429dfdde15baca7f940600a899fd1d0ac96e55a


$new_user = $bd->prepare("SELECT * FROM user where user = :user and passwd= :pass");

$new_user->bindParam(':user', $user);
$new_user->bindParam(':pass', $pass);
$new_user->execute();
$new = $new_user->rowCount();

if ($new==1){
<<<<<<< HEAD
=======
    echo "<script>alert('NOOOOOOOOOOOO');</script>";
	echo "TRUE";
}else{
    $new_user = $bd->prepare("INSERT INTO user (user, passwd, mail) VALUES (:user,:pass,:mail");
    $new_user ->execute();
>>>>>>> 6429dfdde15baca7f940600a899fd1d0ac96e55a
	echo "FALSE";
}else{
    $reg = $bd->prepare("INSERT INTO user (user, passwd) VALUES (:user, :pass)");
    $reg->bindParam(':user', $user);
    $reg->bindParam(':pass', $pass);
    $reg->execute();
	echo "TRUE";
}



?>
