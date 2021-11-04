<<<<<<< HEAD
function addShopCart(id_game) {
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            console.log((this.responseText));
=======
function add(id_game) {
    debugger;
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
            
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {
<<<<<<< HEAD
                alert("juego añadido correctamente!")
            } else {
                alert("No se a podido añadir el juego");
=======
                alert("Game successfully obtained")
            } else {
                alert("Error getting game");
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
            }
		}
	}

    let params="id_game="+id_game+"&quantity=1";

	xhttp.open("POST", "../shop_cart/addShopCart.php", true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);	
}

<<<<<<< HEAD
function loadRow(game, tableBody) {
    let row='<tr>';

=======

function loadRow(game, tableBody) {
    let row='<tr>';
    row+='<tr>';
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
    row+='<th scope="row">'+game.id_game+'</th>';
    //row+='<td>'+game.img+'</td>';
    row+='<td>'+game.name+'</td>';
    row+='<td><img src="'+game.img+'"style="height:140px;withd:100px"></td>';
    row+='<td>'+game.year+'</td>';
    row+='<td>'+game.description+'</td>';
    row+='<td>'+game.price+'</td>';

    let addBasketBtn='<td>';
<<<<<<< HEAD
    addBasketBtn+='<button onclick="addShopCart('+game.id_game+')" id='+game.id_game+' role="button" class="btn btn-primary btn-sm">add to Basket</button>';
=======
    addBasketBtn+='<button onclik="add('+game.id_game+')">add to Basket</button>';
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
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