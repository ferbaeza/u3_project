function loadConsole(console, consolas) {
    let gameConsole='<div>';
    gameConsole+='<div class="conquery">';
    gameConsole+='<h2>'+console.name+'</h2>';
    gameConsole+='<div id="conquery"><a href="games.php?id='+console.id_console+'"<div><img id="consola_logo"src='+console.imagen+'></div></div>';
    gameConsole+='</div></a>';




    consolas.innerHTML+=gameConsole;
}

function loadData(gameConsoleJSON, consolas) {
    //Si no hay juegos muestro un mensaje, si no, las cargo en la tabla
    if(gameConsoleJSON.length<=0) {
        document.getElementById("no-consoles-message").style.display="block";
    } else {
        for(let i in gameConsoleJSON) {
            let console = gameConsoleJSON[i];
            loadConsole(console, consolas);
        }
    }
}


//-------------------------------------



function loadCon() {

    let consolas = document.getElementById("consolas");
    consolas.innerHTML="";

    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
                loadData(response.data, consolas);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}
	xhttp.open("GET", "../consolas/get_consoles.php?", true);	
	xhttp.send();	
}
//-------------------------------------


document.addEventListener("DOMContentLoaded", function(event) { 
    loadCon();
});

