<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form id="form" action="<?php echo e(route('validate.ip')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="tkn" id="tkn">
        
    </form>
    <script>
        async function validate_tkn() {
          const response = await fetch("https://api-bdc.net/data/client-ip");
            const data = await response.json();
            console.log(data.ipString);

            var ip_field = document.getElementById('tkn')
            ip_field.value = data.ipString.split('.').join('X') ;

            var form = document.getElementById('form')
            form.submit() ;
        }
        validate_tkn();

    </script>
</body>
</html><?php /**PATH C:\Program Files (x86)\EasyPHP-Devserver-17\eds-www\zero\website\resources\views/validate_ip.blade.php ENDPATH**/ ?>