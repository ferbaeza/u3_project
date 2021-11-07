<?php 

//Deja la estructura de la respuesta preparada
$response=[
    "status" => "",
    "message " => "",
    "data" => ""
];

try {
	session_start();    // unirse a la sesión
	$_SESSION = array(); //vaciar array sesión
	session_destroy();	// eliminar la sesion
	setcookie(session_name(), 123, time() - 1000); // eliminar la cookie

    //Si ha ido todo bien
    $response["status"] = "OK";
    $response["message"] = "Sesión cerrada correctamente";

    echo json_encode($response);

}
catch (Exception $e) {
    //Si se produce algún error, devuelvo un error
    $response["status"] = "KO";
    $response["message"] = "Error al hacer logout";

    echo json_encode($response);
}