<?php $__env->startSection('title', 'Profile'); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->

            <div class="border-bottom pb-4 mb-4">
                <h3 class="mb-0 fw-bold">Paramètres</h3>

            </div>

        </div>
    </div>
    <div class="row mb-8">
        <div class="col-xl-3 col-lg-4 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
                <h4 class="mb-1">Paramètres généraux</h4>
                <p class="mb-0 fs-5 text-muted">Profile</p>
            </div>

        </div>

        <div class="col-xl-9 col-lg-8 col-md-12 col-12">
            <!-- card -->
            <div class="card">
                <!-- card body -->
                <div class="card-body">
                    <form action="<?php echo e(route('user.update')); ?>" method="post">
                        <?php echo csrf_field(); ?>

                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-4 col-form-label form-label">Nom et prénom</label>
                            <div class="col-md-8 col-12">
                                <input type="email" class="form-control"  disabled value="<?php echo e($user['name']); ?>">
                            </div>
                        </div>
                        <!-- row -->
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label form-label">Nom d'utilisateur</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control"  disabled value="<?php echo e($user['username']); ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label form-label">Email</label>
                            <div class="col-md-8 col-12">
                                <input type="text" class="form-control" disabled value="<?php echo e($user['email']); ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label form-label">Nouveau mot de passe</label>
                            <div class="col-md-8 col-12">
                                <input type="password" class="form-control"  name="password" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-4 col-form-label form-label">Confirmer votre mote de passe</label>
                            <div class="col-md-8 col-12">
                                <input type="password" class="form-control"  name="newPassword" required>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary"> Enregistrer</button>    
                        </div><!-- End of .text-end -->
                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\ens\website\resources\views/auth/settings.blade.php ENDPATH**/ ?>