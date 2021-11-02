function addGame(id_game) {
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
                alert("Game successfully obtained")
            } else {
                alert("Error getting game");
            }
		}
	}

    let params="id_game="+id_game+"&quantity=1";

	xhttp.open("POST", "addShopCart.php", true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);	
}

function loadGame(gamesJSON) {

    let tableBody = document.getElementById("tbody-container");
    tableBody.innerHTML="";

    if(gamesJSON.length<=0) {
        document.getElementById("no-games-message").style.display="block";
    } else {

        for(let i in gamesJSON) {

            let game = gamesJSON[i];

            let row='<tr>';
            row+='<tr>';
            row+='<th scope="row">'+game.id+'</th>';
            row+='<td>'+game.name+'</td>';
            row+='<td>'+game.price+'</td>';

            let addBasketBtn='<td>';
            addBasketBtn+='<button onclick="addGame('+game.id+')" role="button" class="btn btn-primary btn-sm">Añadir Juego</button>';
            addBasketBtn+='</td>';
            row+=addBasketBtn;

            row+='</tr>';
            tableBody.innerHTML+=row;
        }
    }
}

function loadGame() {
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
     
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
                loadDataInTable(response.data);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}

    
	xhttp.open("GET", "addShopCArt.php", true);	
	xhttp.send();	
}
document.addEventListener("DOMContentLoaded", function(event) { 
    loadFilms();
});