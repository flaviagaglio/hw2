

<html>
  <head>
    <meta charset = 'utf-8'>
  <script src='<?php echo e(url('js/scriptPlaylist.js')); ?>' defer></script>
  <link rel = 'stylesheet' href = '<?php echo e(url('css/styleChat.css')); ?>'/>
  <script>const BASE_URL="<?php echo e(url('/')); ?>"; </script>

   <title>Home</title>
  </head>
  <body>
  <div id = "flex-container">
		<div class="flex-item" id = 'link' name='logout' >
		<a name="logout" class="flex-item" id = 'link' href="<?php echo e(url('logout')); ?>">Logout</a>
</div>
<div id = "flex-container">
		<div class="flex-item" id = 'link' name='home' >
		<a name="home" class="flex-item" id = 'link' href="<?php echo e(url('home')); ?>">Home</a>
</div>

</div>
<button class="apriPlaylist flex-item " id = 'linkPlaylist'   >Richiedi Playlist</button> 

	</div> 
  </div>

</div>







	<section class="Playlist ">
	<div class="song"  ></div>
	</section>

  </body>
</html>
<?php  ?>