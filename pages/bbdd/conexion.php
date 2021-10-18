<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "u3"; //Hay que modificar el nombre de la base de datos a la que vayamos a consultar


    //conexion en bbdd

    $mysqli = new mysqli($server, $user, $password, $database);


?>