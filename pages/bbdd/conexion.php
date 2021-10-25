<?php
//conexion en bbdd  con libreria PDO se utiliza esta sentencia

function bbddConexion(){
    $cadena_conexion = 'mysql:dbname=tiendaretro;host=127.0.0.1';
    $usuario = 'root';
    $clave = '';
    try {
        $bd = new PDO($cadena_conexion, $usuario, $clave);
    } catch (PDOException $e) {
        echo 'Error con la base de datos: ' . $e->getMessage();
    }
    return $bd;
}

function getGames() {
    try {
    	$bd = bbddConexion();

        if(!is_null($bd)) {
            $sql = $bd->prepare("SELECT * from game WHERE id_console = 1");
            $sql->execute();
            return $sql->fetchAll();
        } else
            return $bd;

    } catch (PDOException $e) {
       return null;
    }
}

function getGamesId($id) {
    try {
    	$bd = bbddConexion();

        if(!is_null($bd)) {
            $sql = $bd->prepare("SELECT * from game WHERE id_console = :id_console");
            $params = array(
                ':id' => $id,
            );
            $sql->execute($params);

            return $sql->fetchAll();
        } else
            return $bd;

    } catch (PDOException $e) {
       return null;
    }
}


?>