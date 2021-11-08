<?php
require_once "../utils/response.php";

try {
	$idGame = $_POST["id_game"];
	
	$shopCartArray = json_decode($_COOKIE['shopCart']);
	$array=[];
	foreach($shopCartArray as $i){
		if($i->id == $idGame){
			setcookie("shopCart", "", time() - 3600);
			break;
		}else{
			array_push($array, $i);
		}
	}
	setcookie('shopCart', json_encode($array), time() + 3600 * 24);
	echo getResponse("OK", "Cokkie");
} catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set");

}