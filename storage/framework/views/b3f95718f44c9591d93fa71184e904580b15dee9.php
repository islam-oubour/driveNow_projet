
<?php $__env->startSection('title', 'Accueil'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="mb-4 col-lg-6 col-md-12 col-12">
            <!-- card -->
            <div class="card ">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center ">
                        <div>
                            <h4 class="mb-0">MIP</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-primary text-primary
                    rounded-2">
                            M
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">18</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4 col-lg-6 col-md-12 col-12">
            <!-- card -->
            <div class="card ">
                <!-- card body -->
                <div class="card-body">
                    <!-- heading -->
                    <div class="d-flex justify-content-between align-items-center ">
                        <div>
                            <h4 class="mb-0">BCG</h4>
                        </div>
                        <div class="icon-shape icon-md bg-light-danger text-primary
                    rounded-2">
                            <div class="text-danger">B</div><!-- End of .text-danger -->
                        </div>
                    </div>
                    <!-- project number -->
                    <div>
                        <h1 class="fw-bold">18</h1>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- End of .row -->
    <div class="row">
        <?php for($i = 0; $i < 9; $i++): ?>
            <div class="mb-4 col-lg-3 col-md-12 col-12">
                <!-- card -->
                <div class="card ">
                    <!-- card body -->
                    <div class="card-body">
                        <!-- heading -->
                        <div class="d-flex justify-content-between align-items-center ">
                            <div>
                                <h4 class="mb-0">Projects</h4>
                            </div>
                            <div class="icon-shape icon-md bg-light-primary text-primary
                    rounded-2">
                                <i class="bi bi-briefcase fs-4"></i>
                            </div>
                        </div>
                        <!-- project number -->
                        <div>
                            <h1 class="fw-bold">18</h1>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div><!-- End of .row -->
    <div class="row mt-4">
        <div class="col">
            <div class="card ">
                <div class="card-header">
                    Title
                </div><!-- End of .card-header -->
                <div class="card-body ">
                    <ol class="list-group list-group-numbered">
                        <?php for($i = 0; $i < 6; $i++): ?>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Subheading</div>
                                    Content for list item
                                    <div class="mgfdg mt-1 fs-6">
                                        <ul class="list-group list-group-horizontal">
                                            <li class="list-group-item fs-6 p-1">
                                                <strong>Normale : 12.25</strong>
                                            </li>
                                            <li class="list-group-item fs-6 p-1">
                                                <strong>Rattrapage : 12.25</strong>
                                            </li>
                                            <li class="list-group-item fs-6 p-1">
                                                <strong>Finale : 12.25</strong>
                                            </li>
                                        </ul>
                                    </div><!-- End of .mb-2 -->
                                </div>
                            
                            </li>
                        <?php endfor; ?>
                    </ol>
                </div><!-- End of .card-body -->
            </div><!-- End of .card -->
        </div><!-- End of .col -->
    </div><!-- End of .row -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/home.blade.php ENDPATH**/ ?>