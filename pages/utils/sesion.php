<?php
	session_start(); 
	if(!isset($_SESSION['user_loged'])){	
		header("Location: login.php");
	}
?>