

<!DOCTYPE html>
<html>
    <head>
		<meta charset = 'utf-8'>
        <title>Registrazione</title>
		<script src = 'signup.js' defer = 'true'></script>
		<link rel = 'stylesheet' href = '<?php echo e(url('css/signup.css')); ?>'/>
		
		

    </head>
	
    <body>
        <h1>Login Page</h1>
		<form name = 'form' method = 'post'>
			<p><label>Nome utente <input type = 'text' name = 'nomeutente'></label></p>
			<p><label>Password <input type = 'password' name = 'password'></label></p>
			<input id = 'bottone' value = 'Entra' type = 'submit'>
		</form>
        
<?php if($message = Session::get ('error') ): ?>
<strong><?php echo e($message); ?></strong>

<?php endif; ?>
		</br></br></br>
		<a id = 'link' href = "<?php echo e(route ('register')); ?>">Non sei ancora registrato? Registrati subito!</a>
    </body>
</html>

<?php /**PATH C:\Users\39393\Documents\HW2\resources\views/index.blade.php ENDPATH**/ ?>