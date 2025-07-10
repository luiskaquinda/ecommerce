<div id="delete-<?php echo e($produto->id); ?>" class="modal">
  <div class="modal-content">
    <h4><i class="material-icons">delete</i> Deletar </h4>
    <div class="col s12">
      <div class="row">     
          Tem Certeza que queres deletar <?php echo e($produto->name); ?>

      </div> 
    
      <form action="<?php echo e(route('admin.delete', $produto->id)); ?>" method="POST">
        <?php echo method_field('DELETE'); ?>
        <?php echo csrf_field(); ?>

        <a href="#!" class="modal-close waves-effect waves-green btn blue right">Cancelar</a>
        <button type="submit" class="waves-effect waves-green btn red right">Excluir</button><br>
      </form>
    </div>
  </div>
</div><?php /**PATH C:\laragon\www\ecommerce\resources\views/admin/produtos/delete.blade.php ENDPATH**/ ?>