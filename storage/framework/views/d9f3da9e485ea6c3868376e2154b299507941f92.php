<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?> <?php echo $__env->yieldContent('title'); ?></title>

    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon.png')); ?>">
    <link rel='stylesheet' href='<?php echo e(url('css/style.css')); ?>'>

    <?php echo $__env->yieldContent('script'); ?>
    
</head>
<body>
    <main>
  
            <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html>

<?php  ?>