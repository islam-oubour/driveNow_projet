<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?>">
    <!-- Libs CSS -->
    <script src=<?php echo e(asset('assets/js/notyf.min.js')); ?>></script>
    <script>
        function fireNotification(type, message) {
            var notyf = new Notyf({
                position: {
                    x: 'right',
                    y: 'top',
                },
                duration: 5000,
            });
            if (type == 'success') {
                notyf.success(message);
            } else {
                notyf.error(message);
            }
        }
    </script>
    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/dataTables.bootstrap5.min.css')); ?>">
    <link href="<?php echo e(asset('assets/libs/bootstrap-icons/font/bootstrap-icons.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/libs/dropzone/dist/dropzone.css')); ?>" rel="stylesheet">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/notyf.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/custom.css')); ?>">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <style>
        @import  url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");
        td , th{
            padding: 6px 10px !important;
        }
        td {
            vertical-align: middle !important;
            font-size: 14px !important;
            font-weight: normal;
            text-transform: capitalize !important;
        }
    </style>
</head>

<body class="bg-light">
    <div id="db-wrapper">
        <!-- navbar vertical -->
        <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- page content -->
        <div id="page-content">
            <?php echo $__env->make('components.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Container fluid -->
            <div class="container-fluid py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </div>

        </div>
    </div>
    <!-- Libs JS -->
    

    <script src="<?php echo e(asset('/assets/js/main.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery-3.5.1.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('/assets/js/theme.min.js')); ?>"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                lengthMenu: [50, 100, 150, 200, 500, 1000],
                order: [
                    [0, 'desc']
                ],
            });
            var box = document.getElementById("example_wrapper");
            box.firstChild.style.marginBottom = "30px"
            box.firstChild.style.marginLeft = "30px"
            box.firstChild.style.marginRight = "30px"
            box.lastChild.style.marginTop = "30px"
            box.lastChild.style.marginLeft = "30px"
            box.lastChild.style.marginRight = "30px"

        });
    </script>

</body>

</html>
<?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\projet_vide_admin\website\resources\views/layout/app.blade.php ENDPATH**/ ?>