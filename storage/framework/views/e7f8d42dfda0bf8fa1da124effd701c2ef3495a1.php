
<?php $__env->startSection('title', 'Convocations'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row mb-3">
        <div class="col">
            <div class="card" style="border-radius: .5rem .5rem 0 0">
                <ul class="nav nav-line-bottom nav-example" id="pills-tabTwo" role="tablist">
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link ">Listes</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link active">Convocations</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link ">Attestations</a>
                    </li>
                    <li role="button" class="nav-item cursor-pointer">
                        <a class="nav-link ">Releves</a>
                    </li>
                </ul>
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
    <div class="row">
        <div class="col col-12 mb-2">
            <div class="card">
                <div class="card-header">
                    Semestre
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.convocations.semestre')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date</span>
                                    <input type="datetime-local" name="date" class="form-control" required>
                                </div>

                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Liste des membres</span>
                                    <input type="file" name="liste" class="form-control" >
                                </div>

                            </div><!-- End of .col -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Generer
                                </button><!-- End of .btn -->    
                            </div><!-- End of .text-end -->
                        </div><!-- End of .row -->
                        <div class="text-end">
                        </div><!-- End of .text-end -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
        <div class="col col-12">
            <div class="card">
                <div class="card-header">
                    DEUST
                </div><!-- End of .card-header -->
                <div class="card-body">
                    <form target="_blank" action="<?php echo e(route('deliberation.convocations.DEUST')); ?>" method="post" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Date</span>
                                    <input type="datetime-local" name="date" class="form-control" required>
                                </div>

                            </div><!-- End of .col -->
                            <div class="col col-12">
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Liste des membres</span>
                                    <input type="file" name="liste" class="form-control" >
                                </div>

                            </div><!-- End of .col -->
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary">
                                    Generer
                                </button><!-- End of .btn -->    
                            </div><!-- End of .text-end -->
                        </div><!-- End of .row -->
                        <div class="text-end">
                        </div><!-- End of .text-end -->
                    </form>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/deliberation/convocations.blade.php ENDPATH**/ ?>