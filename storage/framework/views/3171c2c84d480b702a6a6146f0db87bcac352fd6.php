
<?php $__env->startSection('title', 'Exportation'); ?>
<?php $__env->startSection('content'); ?>
    <div class="main">
        <div class="card">
            <div class="card-header">
                Doublants de listes    
            </div><!-- End of .card-header --> 
            <div class="card-body">
                <form action="<?php echo e(route('tools.doubles')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="hstack gap-3">
                        <input type="file" class="form-control" name="liste">
                        <button type="submit" class="btn btn-primary" >Verifier</button>
                    </div><!-- End of .hstack --> 
                </form>
            </div><!-- End of .card-body -->   
        </div><!-- End of .card -->

    </div><!-- End of .main -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/tools/tools.blade.php ENDPATH**/ ?>