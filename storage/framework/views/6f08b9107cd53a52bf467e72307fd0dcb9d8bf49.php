<div class="header @classList">
    <!-- navbar -->
    <nav class="navbar-classic navbar navbar-expand-lg">
        <a id="nav-toggle" href="#"><i class="bi bi-list"></i></a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            
            <div class="row">
                <div class="col">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">Année universitaire</span>
                        <input type="text" class="form-control" value="<?php echo e(fst_au()); ?>" disabled>
                    </div>
                </div><!-- End of .col -->
                <div class="col  p-0">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text">Session</span>
                        <input type="text" class="form-control" value="<?php echo e(fst_session()); ?>" disabled>
                    </div>
                </div><!-- End of .col -->
            </div><!-- End of .row -->
        </div>
        <!--Navbar nav -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
            <!-- List -->
            <?php echo $__env->make('components.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
    </nav>
</div><!-- End of .nav -->
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/components/nav.blade.php ENDPATH**/ ?>