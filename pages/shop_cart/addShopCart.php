<?php
require_once "../bbdd/conexion.php";

$response=[
	"status" => "",
	"message " => "",
	"data" => ""
];

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

		setcookie('shopCart', json_encode($shopCart), time() + 3600 * 24);
		
	}else{

		$shopCart = json_decode($_COOKIE['shopCart']);

		$found=false;
		foreach($shopCart as $G) {

			if(strcmp($G->id, $idFilm)===0) {
				$G->quantity += $quantity;

				$found=true;
				break;
			}
		}

		if(!$found) {
			$newgame = [
				"id" => $idFilm,
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