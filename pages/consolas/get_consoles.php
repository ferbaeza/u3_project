<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";


try {
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$resp = getConsoles();

		if(is_null($resp))
			echo getResponse("KO","NOT CONEXION WITH BD");
		else
			echo getResponse("OK", "Game added to Shopcart successfully", $resp);

	} else {
		echo getResponse("KO","Tipo de petición incorrecta");
	}

} catch(Exception $e) {
	echo getResponse("KO","Error interno");
}