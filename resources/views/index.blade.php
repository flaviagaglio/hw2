

<!DOCTYPE html>
<html>
    <head>
		<meta charset = 'utf-8'>
        <title>Registrazione</title>
        <script src='{{ asset('js/signup.js') }}' defer></script>

		<link rel = 'stylesheet' href = '{{ url('css/signup.css') }}'/>
		
		

    </head>
	
    <body>
        <h1>Login Page</h1>
		<form action='index' class="formlogin" method="post" name="index">
@csrf
    <label>Username:</label>
    <input type="text" name="username" class="testo" placeholder="Inserisci username" />
    <label>Password:</label>
    <input type="password" name="password" class="testo" placeholder="Inserisci password" />
     <input type='submit' class="button" value="Login" name="login" />

</form> 
@if($message = Session::get ('error') )
			<a id="errorMessage">{{ $message }}</a>
			@endif  
		</br></br></br>
		<a id = 'link' href = "{{ route ('register') }}">Non sei ancora registrato? Registrati subito!</a>
    </body>
</html>

