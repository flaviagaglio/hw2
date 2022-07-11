

<html>
  <head>
    <meta charset = 'utf-8'>

	<link rel = 'stylesheet' href = '<?php echo e(url('css/styleChat.css')); ?>'/>
<script src='<?php echo e(url('js/scriptHome.js')); ?>' defer></script>
<script>const BASE_URL="<?php echo e(url('/')); ?>"; </script>

   <title>Home</title>
  </head>
  <body>
	<div id = "flex-container">
		<div class="flex-item" id = 'link' name='logout' >
		<a name="logout" class="flex-item" id = 'link' href="<?php echo e(url('logout')); ?>">Logout</a>
</div>
<div id = "flex-container">
		<div class="flex-item" id = 'link' name='playlist' >
		<a name="playlist" class="flex-item" id = 'link' href="<?php echo e(url('playlist')); ?>">Apri Playlist</a>
</div>

</div>
		<label id='link' class="flex-item" > Benvenuto <?php echo e('@'.$user['username']); ?>	</label>
	</div> 
</div>
  
<div id='ricercaSpotify'>
	<div id='search'> <input  type = 'text'  name = 'ricerca' placeholder = "Digita il nome di un artista, un gruppo o una canzone" id='search-text'>
	<button   id='search-btn'>Ricerca</button>
</div>

 


	<section class="container">
		
	<div id = 'content'></div>

</section>
<section id="chatStyle">

<h1 id="#title"> CHAT </h1>	
<div id="visualizza_mex" ></div>
<div id="invia_mex" ></div>


<div   class="formsend" name='sendMex' ">

	<textarea name='mex' type = 'text'  id="mex" rows="3" "></textArea>
	<button id="invia"   name="send"  >Send</button>
	<label> <div id="errorMessage" ></div> </label>

</textarea>
</div>

</div>
</section>

  
  <footer> Flavia Gaglio O46002003 </footer>
</body>

</html>
<?php $__env->startSection('extra_routes'); ?>
    const CREATE_ROUTE = '<?php echo e(route('home')); ?>';
<?php $__env->stopSection(); ?>

<?php  ?>