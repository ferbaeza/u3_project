function LoadUserOrder(orderJSON) {
    let tableBody = document.getElementById("order");
    tableBody.innerHTML="";
    if(orderJSON.length<=0) {
        document.getElementById("nonorders").style.display="block";
    } else {
        document.getElementById("nonorders").style.display="none";
        document.getElementById("tablaorders").style.display="block";

        for(let i in orderJSON) {
            let order = orderJSON[i];
            let row='<tr>';
            row+='<tr>';
            row+='<td>'+order.id+'</td>';
            row+='<td>'+order.id_order+'</td>';
            row+='<td>'+order.date+'</td>';
            row+='<td>'+order.total+'</td>';
            row+='</tr>';
            tableBody.innerHTML+=row;
        }
    }
}
function LoadOrder() {
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
            let response = JSON.parse(this.responseText);
            if(response.status=="OK") {

                LoadUserOrder(response.data);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}

	xhttp.open("GET", "../user/getUserOrders.php", true);	
	xhttp.send();	
    }
    document.addEventListener("DOMContentLoaded", function(event) { 
        LoadOrder();
});
