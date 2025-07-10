<?php if($mensagem = Session::get('sucesso')): ?>
    <div class="card green darken-1">
        <div class="card-content white-text">
            <span class="card-title">Tudo bem!</span>
            <p><?php echo e($mensagem); ?></p>
        </div>
    </div>        
<?php endif; ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/admin/includes/mensagens.blade.php ENDPATH**/ ?>