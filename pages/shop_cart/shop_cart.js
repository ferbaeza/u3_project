<<<<<<< HEAD
<<<<<<< HEAD
function loadTableGame(shopCartJSON) {
=======
function add(id_game) {
    debugger;
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

function loadShopcart(gamesJSON) {
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
function loadTableGame(shopCartJSON) {
>>>>>>> henry

    let tableBody = document.getElementById("tbody-container");
    tableBody.innerHTML="";

    if(shopCartJSON.length<=0) {
        document.getElementById("no-favourites-message").style.display="block";
    } else {

        for(let i in shopCartJSON) {

            let game = shopCartJSON[i];

            let row='<tr>';
            row+='<tr>';
            row+='<th scope="row">'+game.id_game+'</th>';
            row+='<td>'+game.quantity+'</td>';
            row+='<td>'+game.price+'</td>';
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> henry
            row+='<td>'+game.total_price+'</td>';
             row+='</tr>';
        
            
<<<<<<< HEAD
=======

            let addBasketBtn='<td>';
            addBasketBtn+='<button onclick="add('+game.id+')" role="button" class="btn btn-primary btn-sm">Añadir Juego</button>';
            addBasketBtn+='</td>';
            row+=addBasketBtn;

            row+='</tr>';
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
>>>>>>> henry
            tableBody.innerHTML+=row;
        }
    }
}

<<<<<<< HEAD
<<<<<<< HEAD
function loadShopCart() {
=======
function loadCart() {
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
function loadShopCart() {
>>>>>>> henry
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

    
	xhttp.open("GET", "get_shopCart.php", true);	
	xhttp.send();	
}


document.addEventListener("DOMContentLoaded", function(event) { 
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> henry

    loadShopCart();
});

<<<<<<< HEAD

=======
    //loadCart();
});
>>>>>>> 034cbb740a5ffe946cd1f480321351a602e41e7e
=======
>>>>>>> henry
