<?php
require_once "../utils/response.php";
$idGame = $_POST["id_game"];
$quantity = $_POST["quantity"];



try {
	$shopCartArray = json_decode($_COOKIE['shopCart']);
	$array=[];
	foreach($shopCartArray as $G) {
		if(strcmp($G->id, $idGame)===0) {
			$G->quantity += $quantity;
		}
		if($G->quantity == 0){
			setcookie("shopCart", "", time() - 3600, '/' );
		}else{
			array_push($array, $G);
		}
		
	}setcookie('shopCart', json_encode($array), time() + 3600 * 24, '/' );
	echo getResponse("OK", "Cokkie");

}catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set");
}