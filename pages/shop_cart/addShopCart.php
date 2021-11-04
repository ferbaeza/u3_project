<?php
require_once "../bbdd/conexion.php";
<<<<<<< HEAD
require_once "../utils/response.php";

=======
require_once "../utils/response.php"
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e

try {
	$idGame = $_POST["id_game"];
	$quantity = intval($_POST["quantity"]);

	if(!isset($_COOKIE['shopCart'])){ 
		
		$shopCartArray = [
			[
				"id" => $idGame,
				"quantity" => $quantity
			]
		];

		setcookie('shopCart', json_encode($shopCartArray), time() + 3600 * 24);
		
	}else{

		$shopCartArray = json_decode($_COOKIE['shopCart']);

		$found=false;
<<<<<<< HEAD
		
		foreach($shopCart as $G) {
			if(strcmp($G->id, $idGame)===0) {
=======
		foreach($shopCartArray as $G) {

			if(strcmp($G->id, $id_game)===0) {
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
				$G->quantity += $quantity;

				$found=true;
				break;
			}
		}

		if(!$found) {
			$newgame = [
<<<<<<< HEAD
				"id" => $idGame,
=======
				"id_game" => $id_game,
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
				"quantity" => $quantity
			];
			array_push($shopCartArray, $newgame);
		}
		
		setcookie('shopCart', json_encode($shopCartArray), time() + 3600 * 24);
	}

	$response["status"] = "OK";
	$response["message"] = "Game added successfully";

	echo json_encode($response);

} catch (Exception $e) {
		$response["status"] = "KO";
	$response["message"] = "Error  game could not be added";

	echo json_encode($response);
}