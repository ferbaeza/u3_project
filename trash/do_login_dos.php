<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];
echo "<script>alert('OK');</script>";

$login = $bd->prepare("SELECT * FROM user where user= '$user' and passwd= '$pass'");
$control = $login->execute();
$result = $control->fetchAll();
foreach ($result as $line){
    if($line['user'] == $user and $line['passwd'] == $pass){
        echo "<script>alert('OK');</script>";
    }
}