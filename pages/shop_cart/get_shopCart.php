<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";

try {
	$definitiveArray=[];
	
	if(isset($_COOKIE['shopCart'])){
		$shopCart = json_decode($_COOKIE['shopCart']);
		foreach($shopCart as $g) {
			$id = $g->id;

			$bd = bbddConexion();

			$sqlPrepared = $bd->prepare("SELECT * FROM game where id_game = :id");
			$params = array(
				":id" => $id,
			);
			$sqlPrepared->execute($params);
			$game= $sqlPrepared->fetchAll();
			foreach($game as $x){
				$gameData= [

					'id' => $g->id,
					'quantity' => $g->quantity,
					'name' => $x['name'],
					'price'=> $x['price'],
					'total_price'=> $x['price'] * $g->quantity
				];
			array_push($definitiveArray, $gameData);
			}
		}	
	}
	echo getResponse("OK", "Cokkie", $definitiveArray);
} catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set");
}