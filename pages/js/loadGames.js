function addShopCart(id_game) {
    //Añado una película como favorita a las cookies
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
                alert("Juego add correctamente!")
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}

    //Hago una petición para que guarde en las cookies la película
    let params="idgame="+id_game+"&quantity=1";

	xhttp.open("POST", "../shop_cart/addShopCart.php?id_game="+id_game, true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);	
}



function loadRow(game, tableBody) {
    let row='<tr>';

    row+='<tr>';
    row+='<th scope="row">'+game.id_game+'</th>';
    //row+='<td>'+game.img+'</td>';
    row+='<td>'+game.name+'</td>';
    row+='<td><img src="'+game.img+'"style="height:140px;withd:100px"></td>';
    row+='<td>'+game.year+'</td>';
    row+='<td>'+game.description+'</td>';
    row+='<td>'+game.price+'</td>';

    let addBasketBtn='<td>';
    addBasketBtn+='<button onclik="addShopCart('+game.id_game+')">add to Basket</button>';
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



function loadGames() {

    let tableBody = document.getElementById("tbody-container");
    tableBody.innerHTML="";

    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            debugger;
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
                loadDataInTable(response.data, tableBody);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}
    let url = new URL(window.location.href);
    let id = url.searchParams.get("id");

	xhttp.open("GET", "../consolas/get_games.php?id="+id, true);	
	xhttp.send();	
}
//-------------------------------------


document.addEventListener("DOMContentLoaded", function(event) { 
    //Cuando carga la página, llamo al método que obtiene los juegos y pinta los resultados
    loadGames();
});