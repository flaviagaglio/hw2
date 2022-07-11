
<!DOCTYPE html>
<html>
  <head>
    <meta charset = 'utf-8'>
	<meta name = 'viewport' content = 'width=device-width, initial-scale = 1'>

		<script src='{{ asset('js/search.js') }}' defer></script>

		<link rel = 'stylesheet' href = '{{ url('css/navbar.css') }}'/>
		<link rel = 'stylesheet' href = '{{ url('css/search.css') }}'/>
	<script>const BASE_URL="{{url('/')}}"; </script>

    <title>Ricerca</title>
  </head>

  <body>
	<div id = 'navbar'>
		<button class = 'riga'><a id="home">Mostra Playlist</a></button>
		<button class = 'riga'><a id = 'active'>Ricerca</a></button>
		<div class = 'riga' id = 'logout'><a href="{{url('logout') }}" name="logout">Logout</a></div>
	</div>
	<div id='ricercaSpotify'>

		<input id = 'ricerca' type = 'text' name = 'ricerca' placeholder = "Digita il nome di un artista, un gruppo o una canzone">
		<input id = 'bottone' value = 'Ricerca' type = 'submit'>
		</div>



	<div id = 'content'></div>
  </body>
</html>
