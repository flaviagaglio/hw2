

<!DOCTYPE html>
<html>
    <head>
		<meta charset = 'utf-8'>
        <title>Registrazione</title>
		<link rel = 'stylesheet' href = '<?php echo e(url('css/signup.css')); ?>'/>
		<script src='<?php echo e(asset('js/signup.js')); ?>' defer></script>



    </head>
	
    <body>
		<h1>Signup Page</h1>
		<form name = 'form' method = 'post'>
		<?php echo csrf_field(); ?>
			<p><label>Nome <input type = 'text' name = 'name'></label></p>
			<p><label>Cognome <input type = 'text' name = 'surname'></label></p>
			<p><label>Email <input type = 'text' name = 'email'></label></p>
			<p><label>Nome utente <input id = 'user' type = 'text' name = 'username'></label></p>
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

<?php  ?>