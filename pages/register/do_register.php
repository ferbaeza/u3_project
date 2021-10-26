<?php
require_once "../bbdd/conexion.php";

try{
    $bd = bbddConexion();

    if(!is_null($bd)){

        $user= $_POST['name'];
        $pass = $_POST['pass'];
        $mail = $_POST['mail'];
        $phone = $_POST['phone'];
        
        $new_user = $bd->prepare("SELECT * FROM user where user = :user and passwd= :pass");

        $new_user->bindParam(':user', $user);
        $new_user->bindParam(':pass', $pass);
        $new_user->execute();
        $new = $new_user->rowCount();

        if ($new==1){
            echo "FALSE";
        }else{   
            $reg = $bd->prepare("INSERT INTO user (user, passwd, mail, phone_number) VALUES (:user, :pass, :mail, :phone)");
            $reg->execute(array(':user'=> $user, ':pass'=> $pass, ':mail'=> $mail, ':phone'=>$phone));
            echo "TRUE";
        }
    
}
}catch (exception $e) {
	echo 'Error con la base de datos: ';
}


?>
