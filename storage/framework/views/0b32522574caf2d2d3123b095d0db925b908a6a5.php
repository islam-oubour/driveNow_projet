
<?php $__env->startSection('title', 'Etudiants'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Recherche
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form action="<?php echo e(route('etudiants.single')); ?>" method="get">
                        <div class="hstack gap-3">
                            <?php echo csrf_field(); ?>
                            <input name="CNE" class="form-control me-auto" type="text" placeholder="CNE"
                                aria-label="Add your item here..." required>
                            <button type="submit" onclick="showLoaderBtn()" class="btn btn-primary">Recherche</button>
                        </div>
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <?php if($etudiant): ?>
        <?php echo $__env->make('etudiants.components.info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row">
            <?php $__currentLoopData = $notes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(count($item) > 0): ?>
                    
                    <div class="col col-12 mb-3">
                        <?php echo $__env->make('etudiants.components.semestre',['data' => $item , 'semestre' => 'S'.($key + 1) , 'CNE' => $etudiant['id']], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div><!-- End of .col -->
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div><!-- End of .row -->
    <?php else: ?>
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-danger">
                    Aucun étudiant trouvé
                </div><!-- End of .alert -->
            </div><!-- End of .col -->
        </div><!-- End of .row -->
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/etudiants/etudiant.blade.php ENDPATH**/ ?>