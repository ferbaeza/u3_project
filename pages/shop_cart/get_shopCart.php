<?php
require_once "../utils/response.php";

try {
    $finalItems = [];

    if(isset($_COOKIE['shopCart'])){

        $items = json_decode($_COOKIE['shopCart']);

        foreach($items as $item) {

            $newGame = [
                "id_game"=> $item-> id,
                "quantity"=> $item->quantity 
            ];
            array_push($finalItems, $newGame);


        }
    }
    $response["status"] = "OK";
	$response["message"] = "Game successfully obtained";
	$response["data"] = $finalItems;

    echo json_encode($response);

}catch (Exception $i){
    $response["status"] = "KO";
	$response["message"] = "Error getting game";
	
}