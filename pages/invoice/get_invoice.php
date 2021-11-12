<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";

	$definitiveArray=[];
	
	if(isset($_COOKIE['shopCart'])){
        echo '1';
		$invoice = json_decode($_COOKIE['shopCart']);
		foreach($invoice as $g) {
        
			$id = $g->id;
            $quantity = $g->quantity;

			$bd = bbddConexion();

			$sqlPrepared = $bd->prepare("SELECT * FROM game where id_game = :id");
			$params = array(
				":id" => $id,
                ":quantity" => $quantity,
                ":stock" => $x['stock'],
                ":total_price" => $x['total_price']
			);
			$sqlPrepared->execute($params);
			$game= $sqlPrepared->fetchAll();
            $total= 0;
			foreach($game as $x){
				$gameData= [

					'id' => $g->id,
					'quantity' => $g->quantity,
					'name' => $x['name'],
					'price'=> $x['price'],
					'total_price'=> $x['price'] * $g->quantity,
                    'total'=> $total + $x['total_price'], 
                    'stock'=> $x['stock']
				];
			array_push($definitiveArray, $gameData);
			}
            if ($g->quantity <= ':stock'){

                    $error = false;
                    if(!$error){     
                        $sqlPrepared1 = $bd->prepare("INSERT INTO order (date, quantity) VALUES (date(), :quantity");
                        $resul1 = $bd->query($sqlPrepared1);

                        if(!$result1){
                            $error = true;
                         }  
                   }

                   if(!$error){

                        
                       $sqlPrepared2 = $bd->prepare("SELECT * FROM order WHERE id_order = :id");
                       $params = array(
                        ':id_order' => $x['id_order'],
                        ":quantity" => $x['quantity']
                        );
                        $sqlPrepared2->execute($params);
                        $game= $sqlPrepared->fetchAll();
                        $resul2 = $bd->query($sqlPrepared2);
                        $id_order = $db->lastInsertId();
 
                    if(!$result2){
                        $error = true;
                    }
                   
                   }

                   if(!$error){
                    
                       $sqlPrepared3 = $bd->prepare("INSERT INTO order_line(id_order, id_game, quantity, total_prices) VALUES ($id_order, :id, :quantity, :total_price )");
                       $result3 = $bd->query($sqlPrepared3);

                       if(!$result3){
                           $error=true;
                       }
                   }

                     if(!$error){
                        $sqlPrepared4 = $bs->prepare("UPDATE game SET stock - :stock  WHERE   id_game = :id");
                        $result4 = $bd->query($sqlPrepared4);

                        if(!$error){
                            $error= true;
                        }
                      }

                    


                   if($error= false){
                       $bd->commit();
                       //$bd->close();
                       echo 'Transaciones realizadas con exito';
                   }else{
                       $bd->rollBack();
                       //$bd->close();
                       echo 'base de datos no actualizada';
                    } 
                
            }

              
                 

                     
                    
           
        }
    
    }
?>