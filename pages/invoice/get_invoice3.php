<?php
	require_once "../bbdd/conexion.php";
	require_once "../utils/response.php";
	$definitiveArray=[];

	if(isset($_COOKIE['shopCart'])){
		$invoice = json_decode($_COOKIE['shopCart']);
		foreach($invoice as $i) {

			$id = $i->id;
			$quantity = $i->quantity;

			$bd = bbddConexion();

			$sqlPrepared =bd->prepare("SELECT * FROM game WHERE id_game = :id");
			$params = array(
				":id"=>$id,
				":quantity" => $quantity,
				":stock" => $x['stock'],
				 ":total_price" => $x['total_price']
			);
			$sqlPrepared->execute($params);
			$game = $sqlPrepared->fetcgAll();
			$total = 0;

			foreach($game as $x){
				$gameData = [
					'id' =>$i->id,
					'quantity' => $i->quantity,
					'name' => $x['name'],
					'price'=> $x['price'],
					'total_price'=> $x['price'] * $g->quantity,
                    'total'=> $total + $x['total_price'], 
                    'stock'=> $x['stock']
				];

				array_push($definitiveArray, $gameData);
			}

			if($i->quantity <= ':stock'){

				$error = false;

				if(!$error){
					$bd->beginTransaction();
					$sqlPrepared1 = $bd->prepare("INSERT INTO order (date, quantity) VALUES (date(), :quantity)");
					
				}
			}

			
		}
	}



?> 