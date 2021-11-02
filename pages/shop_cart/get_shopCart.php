<?php
require_once "../bbdd/conexion.php";

$response=[
	"status" => "",
	"message " => "",
	"data" => ""
];

try {
	$definitiveArray=[];
	
	if(isset($_COOKIE['shopCart'])){
		
		$shopCart = json_decode($_COOKIE['shopCart']);

		foreach($shopCart as $g) {
			
			$gameData= [
				"id" => $g->id,
				"quantity" => $g->quantity
			];

			array_push($definitiveArray, $gameData);
		}
		
	}

	$response["status"] = "OK";
	$response["message"] = "lista juegos obtenido correctamente";
	$response["data"] = $definitiveArray;

	echo json_encode($response);


} catch (Exception $e) {

	
	$response["status"] = "KO";
	$response["message"] = "Error al obtener el juego";

	echo json_encode($response);
}