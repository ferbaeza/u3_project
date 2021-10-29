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

	xhttp.open("POST", "../controllers/favourites/add_favourite.php", true);	
	xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xhttp.send(params);	
}

function loadGame(GameJSON) {

    let tableBody = document.getElementById("tbody-container");
    tableBody.innerHTML="";

    //Si no hay películas muestro un mensaje, si no, las cargo en la tabla
    if(filmsJSON.length<=0) {
        document.getElementById("no-films-message").style.display="block";
    } else {

        for(let i in filmsJSON) {

            let film = filmsJSON[i];

            //Creo la fila
            let row='<tr>';
            row+='<tr>';
            row+='<th scope="row">'+film.id+'</th>';
            row+='<td>'+film.name+'</td>';
            row+='<td>'+film.director+'</td>';
            row+='<td>'+film.classification+'</td>';

            let favouriteButton='<td>';
            favouriteButton+='<button onclick="addGame('+film.id+')" role="button" class="btn btn-primary btn-sm">Añadir Favorita</button>';
            favouriteButton+='</td>';
            row+=favouriteButton;

            row+='</tr>';
        
            //concateno la fila a la tabla
            tableBody.innerHTML+=row;
        }
    }
}

function loadFilms() {
    var xhttp = new XMLHttpRequest();				
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
     
            let response = JSON.parse(this.responseText);

            if(response.status=="OK") {

                //Obtengo la respuesta y la envío a un método que se encarga de crear el HTML
                loadDataInTable(response.data);
            } else {
                alert("Se ha producido un error, inténtalo de nuevo más tarde");
            }
		}
	}

    //Hago una petición al servidor para que me devuelva las películas
	xhttp.open("GET", "../controllers/home/get_films.php", true);	
	xhttp.send();	
}
//-------------------------------------


//Cuando carga la página, llamo al método que obtiene las películas y pinta los resultados
document.addEventListener("DOMContentLoaded", function(event) { 

    //Primer método en ejecutarse cuándo la página ya ha cargado
    loadFilms();
});