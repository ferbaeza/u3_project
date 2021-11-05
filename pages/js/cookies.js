function add(id_game) {
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

	xhttp.open("POST", "../shop_cart/addShopCart.php", true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);	
}