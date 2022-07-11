

<!DOCTYPE html>
<html>
    <head>
		<meta charset = 'utf-8'>
        <title>Registrazione</title>
        <script src='<?php echo e(asset('js/signup.js')); ?>' defer></script>

		<link rel = 'stylesheet' href = '<?php echo e(url('css/signup.css')); ?>'/>
		
		

    </head>
	
    <body>
        <h1>Login Page</h1>
		<form action='index' class="formlogin" method="post" name="index">
<?php echo csrf_field(); ?>
    <label>Username:</label>
    <input type="text" name="username" class="testo" placeholder="Inserisci username" />
    <label>Password:</label>
    <input type="password" name="password" class="testo" placeholder="Inserisci password" />
     <input type='submit' class="button" value="Login" name="login" />

</form> 
<?php if($message = Session::get ('error') ): ?>
			<a id="errorMessage"><?php echo e($message); ?></a>
			<?php endif; ?>  
		</br></br></br>
		<a id = 'link' href = "<?php echo e(route ('register')); ?>">Non sei ancora registrato? Registrati subito!</a>
    </body>
</html>

<?php  ?>