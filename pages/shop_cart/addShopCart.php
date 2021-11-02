<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php"

try {
	$idGame = $_POST["id_game"];
	$quantity = intval($_POST["quantity"]);

	if(!isset($_COOKIE['shopCart'])){
		
		$shopCartArray = [
			[
				"id_game" => $id_game,
				"quantity" => $quantity
			]
		];

		setcookie('shopCart', json_encode($shopCartArray), time() + 3600 * 24);
		
	}else{

		$shopCartArray = json_decode($_COOKIE['shopCart']);

		$found=false;
		foreach($shopCartArray as $G) {

			if(strcmp($G->id, $id_game)===0) {
				$G->quantity += $quantity;

				$found=true;
				break;
			}
		}

		if(!$found) {
			$newgame = [
				"id_game" => $id_game,
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