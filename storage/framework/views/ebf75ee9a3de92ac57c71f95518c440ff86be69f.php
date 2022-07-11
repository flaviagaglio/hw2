

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
		<form action="logout" class="flex-item" id = 'link' name='logout' >
		<button class="flex-item" id = 'link' href = 'logout.php'>Logout</button>
</form>
<form action="playlist.php" class="flex-item" id = 'link' >
<button class="showPlaylist" id = 'linkPlaylist' href='playlist.php' >Apri Playlist</button> 
</form>

		<label id='link' class="flex-item" >   Benvenuto 
        <?php echo e('@'.$user['username']); ?>	</label>
	</div> 

  

	<div id='search'>
		Ricerca <input id='search-text'><button id='search-btn'>Ok</button>

</div>

 


	<section class="container">
	<div id = 'content'></div>

</section>
<section id="chatStyle">

<h1 id="#title"> CHAT </h1>	
<div id="visualizza_mex" > 

	</div>
<div id="invia_mex" >
<form action="" class="formsend" method="post" name="send">
	<textarea name='mex' id="mex" rows="3"></textArea>
    <input type='submit' id="invia"  value="send" name="send" />
	<label> <div id="errorMessage" ></div> </label>
    </form>

</div>
</section>

  
  <footer> Flavia Gaglio O46002003 </footer>
</body>

</html>
<?php $__env->startSection('extra_routes'); ?>
    const CREATE_ROUTE = '<?php echo e(route('home')); ?>';
<?php $__env->stopSection(); ?>

<?php  ?>