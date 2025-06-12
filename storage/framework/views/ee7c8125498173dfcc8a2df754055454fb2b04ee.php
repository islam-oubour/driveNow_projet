<?php if(\Session::has('success')): ?>
<script>
    fireNotification('success', '<?php echo \Session::get('success'); ?>')
</script>
<?php endif; ?>
<?php if($errors->any()): ?>
<script>
    fireNotification('error', '<?php echo e($errors->first()); ?>')
</script>
<?php endif; ?><?php /**PATH /home/fste-umi/public_html/fst/ens/website/resources/views/components/messages.blade.php ENDPATH**/ ?>