<?php
require_once "./bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];

//$user="fer"
//$pass = "123";

$login = $bd->prepare("SELECT * FROM user where usuario= '$user' and contraseña= '$pass'");
$control = $bd->execute($login);
