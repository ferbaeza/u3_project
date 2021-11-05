<?php
require_once "../utils/response.php";

try {
	$idGame = $_POST["id_game"];
	$quantity = $_POST["quantity"];

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
		
		foreach($shopCartArray as $G) {
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
			array_push($shopCartArray, $newgame);
		}
		
		setcookie('shopCart', json_encode($shopCartArray), time() + 3600 * 24);
	}
	
	echo getResponse("OK", "Cokkie");

} catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set");

}