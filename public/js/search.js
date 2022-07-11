const result = document.querySelector("#content");
const searchform = document.querySelector('#bottone');
const button = document.querySelector("#home");
button.addEventListener("click", apri);

searchform.addEventListener("click", search);

function apri(){
  fetch(BASE_URL + '/getplaylist').then(onJsonResponsePlaylist).then(onJsonPlaylist);
}


function onJson(json) { 

	console.log(json);
	result.innerHTML = "";
	let i=0;
	for(it of json.tracks.items) {
		if(i<8){
			const elemento = document.createElement("div");
			result.appendChild(elemento);
			const image = document.createElement("img");
			image.src = it.album.images["0"].url;
			const title = document.createElement("p");
			title.innerHTML = it.name;
			const artists = it.artists;
			const artis = document.createElement("p");
			for(t of artists) {    
				const artisti = t.name;
				artis.innerHTML = artis.innerHTML + " " + artisti;
			}
			const form1 = document.createElement("form");
				form1.name = "select";
				form1.method = "post";
				const add = document.createElement("button");

	     	    add.innerHTML = "Aggiungi";
			elemento.appendChild(title);
			elemento.appendChild(artis);
			elemento.appendChild(image);
			elemento.appendChild(form1);
     	    form1.appendChild(add);

			result.appendChild(elemento);
     	   
			elemento.addEventListener("click", aggiungiPlaylist);
	
			i++;
		}
	}
	
	
	
}	

function onJsonResponse(response) {	

	return response.json();
}

function search(event)
{
	console.log(document.querySelector('#ricerca').value);
   const search_text=document.querySelector('#ricerca').value;
   fetch(BASE_URL +'/search/' + search_text).then(onJsonResponse).then(onJson);
}

function onPlaylistResponse(response){
	return response.json();
}


function aggiungiPlaylist(event){
	event.preventDefault();
	
	const elemento = event.currentTarget;
	const button= elemento.querySelector("form");
	button.innerHTML="";
	const add= document.createElement("h1");
	add.innerHTML = "Aggiunto";
	elemento.appendChild(add);
	let titolo= elemento.childNodes[0].innerHTML
	console.log(titolo);
	fetch(BASE_URL + '/playlist/add/' +  titolo );

}



function onJsonPlaylist(json){

    result.innerHTML='';

  for (row of json){
    const box= document.createElement("p");
    box.innerHTML='';
    const title = document.createElement("p");  
    title.innerHTML = row.titolo;
    const rem = document.createElement("button");
    rem.innerHTML = "Rimuovi";
    box.appendChild(title);
    box.appendChild(rem);
    result.appendChild(box);
    box.addEventListener("click", rimuoviSong);

  }

}
function onJsonResponsePlaylist(response) {	
	return response.json();
}







function rimuoviSong(event){
	event.preventDefault();
	const elemento = event.currentTarget;
	const titolo = elemento.childNodes[0].innerHTML
	fetch(BASE_URL + '/removeSongplaylist/' + titolo  ).then(onJsonResponsePlaylist).then(onJsonPlaylist);


}