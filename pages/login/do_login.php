<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];


$login = $bd->prepare("SELECT * FROM user where user = :user and passwd = :pass ");

$login->bindParam(':user', $user);
$login->bindParam(':pass', $pass);
$login->execute();

$a= $login->rowCount();
if ($a==1){
	session_start();
	$_SESSION['user_loged']=$user;
	echo "TRUE";
}else{
	echo "FALSE";
}


?>