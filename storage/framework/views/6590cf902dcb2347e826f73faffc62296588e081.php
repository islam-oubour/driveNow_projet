
<?php $__env->startSection('title', 'Overture des modules'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="card-header">
            Export
        </div><!-- End of .card-header -->
        <form action="<?php echo e(route('reserve.export')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="hstack gap-3">
                    <select class="form-select" name="type" required aria-label="Default select example">
                        <option value="MPE">Liste des modules overt</option>
                        <option value="NIM">Nombre des inscriptions par chaque module</option>
                    </select>
                    <button type="submit" class="btn btn-primary">
                        Telecharger
                    </button>
                </div><!-- End of .hstack -->
            </div><!-- End of .card-body -->
        </form>
    </div><!-- End of .card -->
    <div class="card mb-3">
        <div class="card-header">
            Export liste des etudiants par module
        </div><!-- End of .card-header -->
        <form action="<?php echo e(route('reserve.export.EPM')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="hstack gap-3">
                    <input name="module" class="form-control me-auto" type="text" placeholder="Module">
                    <button type="submit" class="btn btn-primary">
                        Telecharger
                    </button>
                </div><!-- End of .hstack -->
            </div><!-- End of .card-body -->
        </form>
    </div><!-- End of .card -->
    <div class="card mb-3">
        <div class="card-header">
            Recherche
        </div><!-- End of .card-header -->
        <div class="card-body">
            <form action="<?php echo e(route('reserve.inscription')); ?>" method="get">
                <div class="hstack gap-3">
                    <input name="CNE" class="form-control me-auto" type="text" placeholder="CNE">
                    <input name="id_inscription" class="form-control me-auto" type="text"
                        placeholder="ID d'inscritption">
                    <button type="submit" onclick="showLoaderBtn()" class="btn btn-primary">Recherche</button>
                </div>
            </form>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/reserve/reserve.blade.php ENDPATH**/ ?>