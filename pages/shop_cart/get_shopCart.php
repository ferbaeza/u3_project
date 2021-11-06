<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";

try {
	$definitiveArray=[];
	
	if(isset($_COOKIE['shopCart'])){
		
		$shopCart = json_decode($_COOKIE['shopCart']);

		foreach($shopCart as $g) {

			$bd = bbddConexion();

			$sqlPrepared = $bd->prepare("SELECT id_game, name, precio, classification from game where id_game = id");
			$sqlPrepared->execute();
			$x;

			
			$gameData= [

				'id' => $g->id,
				'quantity' => $g->quantity,
				'name' => $x->name,
				'price'=> $x->price,
				'total_price'=> $x->price * $g->quantity
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