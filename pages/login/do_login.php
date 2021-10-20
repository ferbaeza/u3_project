<?php
require_once "./bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];


$login = $bd->prepare("SELECT * FROM user where usuario= '$user' and passwd= '$pass'");
$control = $bd->execute($login);
