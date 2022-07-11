    

<?php $__env->startSection('title', '| Registrazione'); ?>

<?php $__env->startSection('script'); ?>
<script src='<?php echo e(asset('js/scriptRegister.js')); ?>' defer></script>
<script type="text/javascript">
    const REGISTER_ROUTE = "<?php echo e(route('register')); ?>";
</script>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <body>
       
    <div id="containerRegister">
        <div id="titolologin"><label>Registrazione</label></div>
    <form  method='post' class="formregister" name='register' enctype="multipart/form-data" autocomplete="off" action="<?php echo e(route('register')); ?>">
    <?php echo csrf_field(); ?>

       
    <p>  
    <div class="username <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
        <label> Username:</label> <input  value='<?php echo e(old('username')); ?>' type="text" class="testo" name="username" placeholder="Inserisci username" /> 
        <span>&nbsp;<?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
</div>
    </p>
            <p>
        <label> Nome e cognome :</label> <input type="text" class="testo" name="name" value='<?php echo e(old('name')); ?>' placeholder="Inserisci nome completo" /> 

    </p>
            
        
            <p>  
        <label> Password: </label><input type="password" class="testo" name="password" value='<?php echo e(old('password')); ?>'" placeholder="Inserisci password"/>
            </p><p>  
        <label> Ripeti password: </label><input type="password" class="testo" name="pass2" placeholder="Inserisci di nuovo la password"/>
    </p>
            <p> 
            <div class="email <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> errorj <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"> 
        <label> E-mail: </label><input type='text' name='email' value='<?php echo e(old('email')); ?>' autocomplete="email"  class="testo" placeholder="Inserisci e-mail"/>
        <span>&nbsp;<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
  
        </div>  </p> 
            <label> <div id="errorMessage"></div> </label>
            <?php if($message = Session::get ('error') ): ?>
<a id="errorMessage"><?php echo e($message); ?></a>
<?php endif; ?>
            <input type='submit' class="button" value="Registrati" id="submit" >

</form>

</div>
    </body>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.guest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php  ?>