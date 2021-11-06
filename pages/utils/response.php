<?php

//Para que todas las respuestas tengan el mismo formato, 
//Crea una función que devuelve la respuesta en formato json
// asi puedes reutilizar esta misma funcion 


function getResponse($status="",$message="",$data="") {
    $response = array(
        "status"=>$status,
        "message"=>$message,
        "data"=>$data
    );

    return json_encode($response);
}
 