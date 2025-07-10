
<?php $__env->startSection('title', 'Produtos'); ?>
<?php $__env->startSection('conteudo'); ?>
  <div class="fixed-action-btn">
      <a  class="btn-floating btn-large bg-gradient-green modal-trigger" href="#create">
        <i class="large material-icons">add</i>
      </a>   
    </div>

    <!-- Modal Structure -->
    <?php echo $__env->make('admin.produtos.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      

      <div class="row container crud">
          
              <div class="row titulo ">              
                <h1 class="left">Produtos</h1>
                <span class="right chip"><?php echo e($produtos->count()); ?> produtos exibidos nesta página</span>  
              </div>

            <nav class="bg-gradient-blue">
              <div class="nav-wrapper">
                <form>
                  <div class="input-field">
                    <input placeholder="Pesquisar..." id="search" type="search" required>
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>
            </nav>     

              <div class="card z-depth-4 registros" >
                <?php echo $__env->make('admin.includes.mensagens', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                <table class="striped ">
                    <thead>
                      <tr>
                        <th></th>
                        <th>ID</th>  
                        <th>Produto</th>
                          
                          <th>Preço</th>
                          <th>Categoria</th>
                          <th></th>
                      </tr>
                    </thead>
            
                    <tbody>
                      <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>    
                        <tr>
                          <td><img src="<?php echo e(url("storage/{$produto->imagem}")); ?>" class="circle "></td>
                          <td><?php echo e($produto->id); ?></td>
                          <td><?php echo e($produto->name); ?></td>                    
                          <td>Kz <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></td>
                          <td><?php echo e($produto->categoria->nome); ?></td>
                          <td>
                            <a class="btn-floating  waves-effect waves-light orange"><i class="material-icons">mode_edit</i></a>
                            <a href="#delete-<?php echo e($produto->id); ?>" class="btn-floating modal-trigger waves-effect waves-light red"><i class="material-icons">delete</i></a>
                            <?php echo $__env->make('admin.produtos.delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
              </div> 

            <div class="row center">
              <?php echo e($produtos->links('custom.pagination')); ?>

            </div>             
      </div>
<?php $__env->stopSection(); ?>
       
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/admin/produtos.blade.php ENDPATH**/ ?>