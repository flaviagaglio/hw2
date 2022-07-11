

<!DOCTYPE html>
<html>
    <head>
		<meta charset = 'utf-8'>
        <title>Registrazione</title>
		<script src = 'signup.js' defer = 'true'></script>
		<link rel = 'stylesheet' href = '<?php echo e(url('css/signup.css')); ?>'/>
		
		

    </head>
	
    <body>
		<h1>Signup Page</h1>
		<form name = 'form' method = 'post'>
			<p><label>Nome <input type = 'text' name = 'nome'></label></p>
			<p><label>Cognome <input type = 'text' name = 'cognome'></label></p>
			<p><label>Email <input type = 'text' name = 'email'></label></p>
			<p><label>Nome utente <input id = 'user' type = 'text' name = 'nomeutente'></label></p>
			<p><label>Password <input type = 'password' name = 'password'></label></p>
			<p><label>Conferma password <input type = 'password' name = 'confermapassword'></label></p>
			<input id = 'bottone' value = 'Registrati' type = 'submit'>
			<?php if($message = Session::get ('error') ): ?>
			<a id="errorMessage"><?php echo e($message); ?></a>
			<?php endif; ?>
			
		</form>
		</br></br></br>
    </body>
</html>

<?php /**PATH C:\Users\39393\Documents\HW2\resources\views/register.blade.php ENDPATH**/ ?>