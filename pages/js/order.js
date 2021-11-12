function loadTableGame(shopCartJSON) {
    let tableBody = document.getElementById("tbody-container");
    tableBody.innerHTML="";

    if(shopCartJSON.length<=0) {
        document.getElementById("purchase").style.display="none";
        document.getElementById("nocookies").style.display="block";
    } else {
        let total=0;
        let suma=0;
        for(let i in shopCartJSON) {
            let game = shopCartJSON[i];
            let row='<tr>';
            row+='<tr>';
            row+='<td>'+game.id+'</td>';
            row+='<td>'+game.name+'</td>';
            row+='<td>'+game.quantity+'</td>';
            row+='<td>'+game.price+'</td>';
            row+='<td>'+game.total_price+'</td>';
            row+='</tr>';
            suma =game.total_price;
            total = total + suma;
            console.log(total);
            tableBody.innerHTML+=row;

        }
        let row='<tr>'
        row+='<tr>';
        row+='<tr></tr>';
        row+='<td></td>';
        row+='<td></td>';
        row+='<td></td>';
        row+='<td>Total</td>';
        row+='<td>'+total+'</td>';
        row+='</tr>';
        tableBody.innerHTML+=row;
    }
}

function loadShopCart() {
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            if(response.status=="OK") {

                loadTableGame(response.data);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}

	xhttp.open("GET", "get_shopCart.php", true);	
	xhttp.send();	
    }
    document.addEventListener("DOMContentLoaded", function(event) { 
        loadShopCart();
});
