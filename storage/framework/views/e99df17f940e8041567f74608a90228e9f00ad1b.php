<?php $__env->startSection('title', '| Accedi'); ?>
<?php $__env->startSection('script'); ?>

<script src='<?php echo e(asset('js/scriptLogin.js')); ?>' defer></script>
<script type="text/javascript">
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    
<div id="login">
    <div id="titolologin"><label>Login</label></div>
 
<form action='login' class="formlogin" method="post" name="login">
<?php echo csrf_field(); ?>

    <label>Username:</label>
    <input type="text" name="username" class="testo" placeholder="Inserisci username" /><br>
    <span>&nbsp;<?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>


    <label>Password:</label>
    <input type="password" name="password" class="testo" placeholder="Inserisci password" /><br>
    <label> <div id="errorMessage" ></div> </label>

    <br></br>


<?php if($message = Session::get ('error') ): ?>
<strong><?php echo e($message); ?></strong>

<?php endif; ?>
    
     <input type='submit' class="button" value="Login" name="login" />  
</form>

 <div class="signup">Non hai ancora un account?<a href="<?php echo e(route('register')); ?>"> Iscriviti</a>

</div>
</body>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php  ?>