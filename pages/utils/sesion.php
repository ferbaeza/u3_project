<?php
	session_start(); 
	$user= $_SESSION['user_loged'];
	$umail=$_SESSION['mail_loged'];
	$uphone= $_SESSION['phone_loged'];
	$_SESSION['hora_conexion'];




	if(!isset($_SESSION['user_loged'])){	
		header("Location: ../../index.php");
	}
?>