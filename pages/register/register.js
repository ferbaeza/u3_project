function doRegister(){		
	var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			
			if(this.responseText==="FALSE"){
                document.getElementById("login-ko").style.display="block";
			}else{
                document.getElementById("login-ok").style.display="block";
                window.location.href = "../../index.php";
			}
		}
	}
   
    document.getElementById("login-ko").style.display="none";   //Oculto los mensajes de error del login
	let name = document.getElementById("name").value;   //Recogemos los datos del formulario
	let pass = document.getElementById("pass").value;
    let pass = document.getElementById("mail").value;
    let pass = document.getElementById("phone").value;
    let new_register= "name="+name+"&pass="+pass+"&mail="+mail+"&phone="+phone;

	xhttp.open("POST", "./do_register.php", true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");// envío con POST requiere cabecera y cadena de parámetros
	xhttp.send(new_register);	

	return false;
}	