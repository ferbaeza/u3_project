function doLogin(){		
	var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {


			/*
			let answer = JSON.parse(this.responseText);
			if(response.status=="OK"){
                document.getElementById("login-ko").style.display="block";
			}else if(response.status=="KO"){
                document.getElementById("login-ok").style.display="block";
                window.location.href = "../consolas/main.php";
			}else if(response.status=="EXIST"){
				alert("This mail is already used");
			}
			*/
			if(this.responseText==="FALSE"){
                document.getElementById("login-ko").style.display="block";
			}else{
                document.getElementById("login-ok").style.display="block";
                //window.location.href = "../consolas/main.php";
			}
		}
	}
   
    document.getElementById("login-ko").style.display="none";   //Oculto los mensajes de error del login
	let name = document.getElementById("name").value;   //Recogemos los datos del formulario
	let pass = document.getElementById("pass").value;
    let login_info= "name="+name+"&pass="+pass;

	xhttp.open("POST", "./do_login.php", true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");// envío con POST requiere cabecera y cadena de parámetros
	xhttp.send(login_info);	

	return false;
}	