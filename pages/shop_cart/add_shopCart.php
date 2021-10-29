<?php
require_once "../utils/response.php";
require_once "../bbdd/conexion.php";

try{
 $id= $_POST['id_game'];
 $quantity = intval($_POST['quantity']);

 if(!isset($_COOKIE['shopCard'])){

    $items = [
        [
        "id_game"=> $id,
        "quantity" => $quantity
        ]     
    ];

 setcookie('shopCard', json_encode($items), time() + 3600 * 72);


 } else{

     $items = json_decode($_COOKIE['shopCard']);

     $check=false;
     foreach($items as $item){

         if(strcmp($item->id_game, $id)==0) {
             $item->quantity = $quantity+1;

             $check=true;
             break;
            }
        }
    if(!$check) {
    $newGame = [
             [
            "id_game"=> $id,
            "quantity" => $quantity
            ]     
        ];
        array_push($items, $newgame);
    
    }

    setcookie('shopCard', json_encode($items), time() + 3600 * 72);
 }
    $response["status"] = "OK";
	$response["message"] = "Game added to Shopcart successfully";
	$response["data"] = $definitiveArray;

    echo json_encode($response);

}catch (Exception $i) {
    $response["status"] = "KO";
	$response["message"] = "Error adding game to cart";
    echo json_encode($response);
}
?>