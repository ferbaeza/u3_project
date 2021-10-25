<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";


try {
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$resp = getGames();

		if(is_null($resp))
			echo getResponse("KO","Error interno de base de datos");
		else
			echo getResponse("OK", "Juegos obtenidas correctamente", $resp);

	} else {
		echo getResponse("KO","Tipo de petición incorrecta");
	}

} catch(Exception $e) {
	echo getResponse("KO","Error interno");
}