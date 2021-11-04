<?php
require_once "../bbdd/conexion.php";
<<<<<<< HEAD
<<<<<<< HEAD
require_once "../utils/response.php";

=======
require_once "../utils/response.php"
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
require_once "../utils/response.php";

>>>>>>> henry

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

		$shopCart = json_decode($_COOKIE['shopCart']);

		$found=false;
<<<<<<< HEAD
<<<<<<< HEAD
		
		foreach($shopCart as $G) {
			if(strcmp($G->id, $idGame)===0) {
=======
		foreach($shopCartArray as $G) {

			if(strcmp($G->id, $id_game)===0) {
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
		
		foreach($shopCart as $G) {
			if(strcmp($G->id, $idGame)===0) {
>>>>>>> henry
				$G->quantity += $quantity;

				$found=true;
				break;
			}
		}

		if(!$found) {
			$newgame = [
<<<<<<< HEAD
<<<<<<< HEAD
				"id" => $idGame,
=======
				"id_game" => $id_game,
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
				"id" => $idGame,
>>>>>>> henry
				"quantity" => $quantity
			];
			array_push($shopCart, $newgame);
		}
		
		setcookie('shopCart', json_encode($shopCart), time() + 3600 * 24);
	}

	$response["status"] = "OK";
	$response["message"] = "Game added successfully";

	echo json_encode($response);

} catch (Exception $e) {
		$response["status"] = "KO";
	$response["message"] = "Error  game could not be added";

	echo json_encode($response);
}