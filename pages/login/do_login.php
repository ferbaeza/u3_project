<?php
require_once "../bbdd/conexion.php";
$user= $_POST['name'];
$pass = $_POST['pass'];

/*
$login = $bd->prepare("SELECT * FROM user where usuario= '$user' and passwd= '$pass'");
$control = $login->execute();
$result = $control->fetchAll();
foreach ($result as $line){
    if($line['user'] == $user and $line['passwd'] == $pass){
        echo "<script>alert ('OK');</script>";
    }
}

*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {  

    if($user=="fer" && $pass=="1")
		echo "TRUE";
	else
		echo "FALSE";

}



?>