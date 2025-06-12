<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/bootstrap-select.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/custom.css')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('/assets/auth-favicon.ico')); ?>">
    <title>listes</title>
</head>

<body>
    <main>

        <!-- Section -->
        <section style="height: 100vh; background-image: url(<?php echo e(asset('/assets/img/pattern.jpg')); ?>)" class="vh-lg-100 mt-lg-0 bg-soft d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center form-bg-image">
                    <div class="col-12 d-flex align-items-center justify-content-center" style="flex-direction: column">
                        <div class="text-center">
                            <div class="fste-logo py-3 mb-4">
                                <img height="70"  src="<?php echo e(asset('/assets/img/logo.png')); ?>" alt="">    
            

                            </div><!-- End of .fste-logo -->
                        </div>
                        <?php if($errors->any()): ?>
                        <div class="alert mb-4  alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $errors->first(); ?>

                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php endif; ?>
                        <div style="background-position-y: bottom;border-top: #007fa4 5px solid !important;height:325px ; background-image: url(<?php echo e(asset('/assets/img/bg.png')); ?>)" class="bg-white shadow border-0 rounded border-light p-4 p-lg-5 w-100 fmxw-500">

                            <form action="<?php echo e(route('list')); ?>" method="GET" class="mt-4">
                                <?php echo csrf_field(); ?>
                                <h3>Veuillez choisir un module</h3>
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="semestre">Module</label>
                                    <select name="module" class="selectpicker form-control" data-live-search="true">
					                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $module): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($module->id); ?>" data-tokens="<?php echo e($module->id); ?>"><?php echo e($module->id); ?>

                                                - <?php echo e($module->designation); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="text-end">
                                    
                                    <button type="button" class="btn-info btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="bi bi-upload me-2"></i>Consulter
                                    </button>
                    
                    
                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Session</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body" style="text-align: center">
                                                    <button  name="s" type="submit" value="N"
                                                        class="btn-info btn">Normale</button>
                                                    <button name="s" type="submit" value="R"
                                                        class="btn-warning btn">Rattrapage</button>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="<?php echo e(asset('/assets/js/main.min.js')); ?>"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo e(asset('/assets/js/bootstrap-select.min.js')); ?>"></script>
</html>
<?php /**PATH /var/www/html/listes/website/resources/views/home.blade.php ENDPATH**/ ?>