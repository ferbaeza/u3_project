function doLogin(){		
	var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			if(this.responseText==="FALSE"){
                document.getElementById("login-ko").style.display="block";
			}else{
                document.getElementById("login-ok").style.display="block";

				//redirigir a home		
                window.location.href = "home.php";
			}
		}
	}

    //Oculto los mensajes de error del login
    document.getElementById("login-ko").style.display="none";

    //Monto los parámetros de la llamada
	let email = document.getElementById("email").value;
	let password = document.getElementById("password").value;
	var params = "email="+email+"&password="+password;

	xhttp.open("POST", "../controllers/login/do_login.php", true);	

	// envío con POST requiere cabecera y cadena de parámetros
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);	

	return false;
}	