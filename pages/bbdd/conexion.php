<?php
    $server = "localhost";
    $user = "root";
    $password = "";
<<<<<<< HEAD
    $database = "tiendaretro"; //Hay que modificar el nombre de la base de datos a la que vayamos a consultar


=======
    $database = "fer"; //Hay que modificar el nombre de la base de datos a la que vayamos a consultar
>>>>>>> fer
    //conexion en bbdd
try{
    $bd = new PDO($server, $user, $password, $database);
    echo "Conexión realizada con éxito<br>";

}catch (PDOException $e){
    echo "Error de conexion" . $e->getMessage();
}


?>