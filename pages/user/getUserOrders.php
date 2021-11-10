<?php
require_once "../bbdd/conexion.php";
require_once "../utils/response.php";
require_once "../utils/sesion.php";

try {
	$Listorder=[];
        $bd = bbddConexion();

        $sqlPrepared = $bd->prepare("SELECT * FROM neworder where id_user = :id");
        $params = array(
            ":id" => $id,
        );
        $sqlPrepared->execute($params);
        $pedido= $sqlPrepared->fetchAll();
        foreach($pedido as $x){
            $pedidoData= [
                'id' => $id,
                'id_order'=> $x['id_order'],
                'date' => $x['date'],
                'total'=> $x['total']
            ];
            array_push($Listorder, $pedidoData);
        }
			
	
	echo getResponse("OK", "Cokkie", $Listorder);
}catch (Exception $e) {
	echo getResponse("KO", "NOT cookie set");
}