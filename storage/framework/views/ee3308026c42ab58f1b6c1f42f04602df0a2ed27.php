<?php if($mensagem = Session::get('erro')): ?>
    <?php echo e($mensagem); ?>

<?php endif; ?>

<?php if($errors->any()): ?>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($error); ?> <br>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<form action="<?php echo e(route('login.auth')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('POST'); ?>

    Email: <br> <input type="email" name="email"> <br>
    Password: <br> <input type="password" name="password"> <br>
    <input type="checkbox" name="remember"> Lembrar-me <br>
    <button type="submit"> Entrar </button>
</form><?php /**PATH C:\laragon\www\ecommerce\resources\views/login/form.blade.php ENDPATH**/ ?>