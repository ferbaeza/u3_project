<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";
$user= $_SESSION['user_loged'];

try {
	$ListOrders=[];
        $bd = bbddConexion();

        $sqlPrepared = $bd->prepare("SELECT * FROM neworder where id_user = :id");
        $params = array(
            ":id" => $id,
        );
        $sqlPrepared->execute($params);
        $pedido= $sqlPrepared->fetchAll();
        foreach($pedido as $x){
            $pedidoData= [
                'id' => $x['name'],
                'date' => $x['date'],
                'total'=> $x['total']
            ];
            array_push($ListOrders, $pedidoData);
        }
			
	
	echo getResponse("OK", "Cokkie", $ListOrders);
}catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set");
}