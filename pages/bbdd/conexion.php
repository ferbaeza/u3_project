<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tiendaretro"; //Hay que modificar el nombre de la base de datos a la que vayamos a consultar


    //conexion en bbdd
    
try{

    $conecta = new PDO($server, $user, $password, $database);

}catch (PDOException $e){

    echo "Error de conexion" . $e->getMessage();
}


?>