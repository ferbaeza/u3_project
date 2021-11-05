<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";


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
		
		foreach($shopCart as $G) {
			if(strcmp($G->id, $idGame)===0) {
				$G->quantity += $quantity;

				$found=true;
				break;
			}
		}

		if(!$found) {
			$newgame = [
				"id" => $idGame,
				"quantity" => $quantity
			];
			array_push($shopCart, $newgame);
		}
		
		setcookie('shopCart', json_encode($shopCart), time() + 3600 * 24);
	}
	
	echo getResponse("OK", "Cokkie")
	echo json_encode($response);

} catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set")

	echo json_encode($response);
}