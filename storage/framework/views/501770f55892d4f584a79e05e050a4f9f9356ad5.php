<div class="header @classList">
    <!-- navbar -->
    <nav class="navbar-classic navbar navbar-expand-lg">
        <a id="nav-toggle" href="#"><i class="bi bi-list"></i></a>
        <div class="ms-lg-3 d-none d-md-none d-lg-block">
            <!-- Form -->
            <form class="d-flex align-items-center">
                <input type="search" class="form-control" placeholder="Search" />
            </form>
        </div>
        <!--Navbar nav -->
        <ul class="navbar-nav navbar-right-wrap ms-auto d-flex nav-top-wrap">
            <!-- List -->
            <?php echo $__env->make('components.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </ul>
    </nav>
</div><!-- End of .nav -->
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/components/nav.blade.php ENDPATH**/ ?>