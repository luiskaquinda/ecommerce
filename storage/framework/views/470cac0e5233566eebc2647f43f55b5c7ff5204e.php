
<?php $__env->startSection('title', 'Dashboard'); ?>
<?php $__env->startSection('conteudo'); ?>

  <div class="row container">
    <section class="info">

      <div class="col s12 m4">
        <article class="bg-gradient-green card z-depth-4 ">
          <i class="material-icons">paid</i>
          <p>Faturamento</p>
          <h3>R$ 123,00</h3>       
        </article>
      </div>

      <div class="col s12 m4">
        <article class="bg-gradient-blue card z-depth-4 ">
          <i class="material-icons">face</i>
          <p>Usuários</p>
          <h3><?php echo e($usuarios); ?></h3>           
        </article>
      </div>

      <div class="col s12 m4">
        <article class="bg-gradient-orange card z-depth-4 ">
          <i class="material-icons">shopping_cart</i>
          <p>Pedidos este mês</p>
          <h3>0</h3>            
        </article>
      </div>

    </section>        
  </div>


      <div class="row container ">
        <section class="graficos col s12 m6" >            
          <div class="grafico card z-depth-4">
              <h5 class="center"> Aquisição de usuários</h5>
              <canvas id="myChart" width="400" height="200"></canvas>
          </div>           
        </section> 
        
        <section class="graficos col s12 m6">            
          <div class="grafico card z-depth-4">
            <h5 class="center"> Produtos </h5>
            <canvas id="myChart2" width="400" height="200"></canvas> 
          </div>            
        </section>             
      </div>

      </div>
<?php $__env->stopSection(); ?>
    
<?php $__env->startPush('graficos'); ?>
    <script>
        
        /* Gráfico 01 */
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: [<?php echo e($userAno); ?>],
                datasets: [{
                    label: [{ !! $userLabel !! }],
                    data: [<?php echo e($userTotal); ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',                         
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',                     
                        'rgba(255, 159, 64, 1)'
                    ],
                borderWidth: 1, 
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        /* Gráfico 02 */
        var ctx = document.getElementById('myChart2');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: [<?php echo e($catLabel); ?>],
                datasets: [{
                    label: 'Visitas',
                    data: [<?php echo e($catTotal); ?>],
                    backgroundColor: [
                        'rgba(255, 99, 132)',
                        'rgba(54, 162, 235)',                         
                        'rgba(255, 159, 64)'
                    ]
                }]
            }
        });

    </script>
<?php $__env->stopPush(); ?>
        
  
  
<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\ecommerce\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>