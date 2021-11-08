<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";
include_once "../utils/sesion.php";



try {
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$id= $_GET['id'];
		$resp = getGamesId($id);
		//$resp = getGames();

		if(is_null($resp))
			echo getResponse("KO","Error interno de base de datos");
		else{
			if(count($resp)<0)
				echo getResponse("KO","No se han obtenido resultados");
			else
			echo getResponse("OK", "Juegos obtenidas correctamente", $resp);
		}
	} else {
		echo getResponse("KO","Tipo de petición incorrecta");
	}

} catch(Exception $e) {
	echo getResponse("KO","Error interno");
}