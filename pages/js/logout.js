function doLogout(){	
	
	let urlRequest = "../controllers/login/do_logout.php";
    let config = {
        method: 'POST'
    }
    
    fetch(urlRequest, config)
    .then((resp) => resp.json())
    .then((dataResp) => {

		if(dataResp.status==="OK"){
			alert("Sesión cerrada correctamente!");
			
			//redirigir a login		
			window.location.href = "../../index.php";

		} else {
			alert("Se ha producido un error, al cerrar sesión")
		}
    })
    .catch(() => {
        //Código que se ejecuta si va mal
        alert("Se ha producido un error, inténtalo de nuevo más tarde");
    });
}	