function loadRow(game, tableBody) {
    let row='<tr>';

    row+='<tr>';
    row+='<th scope="row">'+game.id_game+'</th>';
    row+='<td>'+game.name+'</td>';
    row+='<td>'+game.year+'</td>';
    row+='<td>'+game.description+'</td>';
    row+='<td>'+game.price+'</td>';

    let addBasketBtn='<td>';
    addBasketBtn+='<button id='+game.id_game+'" role="button" class="btn btn-primary btn-sm">add..</button>';
    addBasketBtn+='</td>';
    row+=addBasketBtn;

    row+='</tr>';

    tableBody.innerHTML+=row;
}

function loadDataInTable(gameJSON, tableBody) {
    //Si no hay juegos muestro un mensaje, si no, las cargo en la tabla
    if(gameJSON.length<=0) {
        document.getElementById("no-games-message").style.display="block";
    } else {
        for(let i in gameJSON) {
            let game = gameJSON[i];
            loadRow(game, tableBody);
        }
    }
}


//-------------------------------------



function loadSnes() {

    let tableBody = document.getElementById("tbody-container");
    tableBody.innerHTML="";

    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
                loadDataInTable(response.data, tableBody);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}
	xhttp.open("GET", "../consolas/get_games.php?id=$id", true);	
	xhttp.send();	
}
//-------------------------------------


document.addEventListener("DOMContentLoaded", function(event) { 
    //Cuando carga la página, llamo al método que obtiene los juegos y pinta los resultados
    loadSnes();
});