
<?php $__env->startSection('title', 'Overture des modules'); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-3">
        <div class="card-header">
            Recherche
        </div><!-- End of .card-header -->
        <div class="card-body">
            <form action="<?php echo e(route('reserve.inscription')); ?>" method="get">
                <div class="hstack gap-3">
                    <input name="CNE" class="form-control me-auto" type="text" placeholder="CNE">
                    <input name="id_inscription" class="form-control me-auto" type="text" placeholder="ID d'inscritption">
                    <button type="submit" onclick="showLoaderBtn()" class="btn btn-primary">Recherche</button>
                </div>
            </form>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
    <div class="card">
        <div class="card-header">
            Etudiants
        </div><!-- End of .card-header -->
        <div class="card-body p-0">
            <table class="table-bordered table table-striped">
                <thead class="table-primary">
                    <th>Etudiant</th>
                    <th>Inscription</th>
                    <th>NBM</th>
                    <th>Date</th>
                    <th>Action</th>
                </thead>
                <tbody>

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><small><?php echo e($item->CNE); ?></small> <br> <?php echo e($item->nom); ?> </td>
                            <td>
                                <?php echo e($item->id); ?> <br>
                                <?php if($item->confirme == 1): ?>
                                    <span class="badge bg-success">Validé</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Non validé</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($item->NBM); ?></td>
                            <td><?php echo e(date('d/m/Y', strtotime($item->created_at))); ?></td>
                            <td>Action</td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div><!-- End of .card-body -->
    </div><!-- End of .card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/reserve/reserve_inscription.blade.php ENDPATH**/ ?>