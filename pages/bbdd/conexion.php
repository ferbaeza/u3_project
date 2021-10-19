<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "tiendaretro"; //Hay que modificar el nombre de la base de datos a la que vayamos a consultar


    //conexion en bbdd
try{
    $bd = new PDO($server, $user, $password, $database);
    echo "Conexión realizada con éxito<br>";

}catch (PDOException $e){
    echo "Error de conexion" . $e->getMessage();
}


?>