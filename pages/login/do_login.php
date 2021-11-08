<?php
require_once "../bbdd/conexion.php";


try{
	$bd= bbddConexion();
	$user= $_POST['name'];
	$pass = $_POST['pass'];	//es necesario cambiar en bbdd los datos de la tabla user(name=user y subname=passwd)
	if(!is_null($bd)){
		$login = $bd->prepare("SELECT * FROM user where user = :user and passwd = :pass  ");

		$login->bindParam(':user', $user);
		$login->bindParam(':pass', $pass);
		//$login->bindParam(':mail', $mail);
		$login->execute();
		$b=$login->fetchAll();
		$a= $login->rowCount();

		if ($a==1){
			$a= $b[0];
			session_start();
			$_SESSION['user_loged']=$a['user'];  //ver bbdd los campos
			$_SESSION['id_loged']=$a['id_user'];
			$_SESSION['mail_loged']=$a['mail'];
			$_SESSION['phone_loged']=$a['phone_number'];
			echo "TRUE";
		}else{
			echo "FALSE";
		}

    }
}catch (exception $e) {
	echo 'Error con la base de datos: ';
}

?>