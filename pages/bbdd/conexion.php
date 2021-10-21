<?php
//Hay que modificar el nombre de la base de datos a la que vayamos a consultar
//conexion en bbdd  con libreria PDO se utiliza esta sentencia


$cadena_conexion = 'mysql:dbname=tiendaretro;host=127.0.0.1';
$usuario = 'root';
$clave = '';
try {
    $bd = new PDO($cadena_conexion, $usuario, $clave);
} catch (PDOException $e) {
    echo 'Error con la base de datos: ' . $e->getMessage();
} 

?>