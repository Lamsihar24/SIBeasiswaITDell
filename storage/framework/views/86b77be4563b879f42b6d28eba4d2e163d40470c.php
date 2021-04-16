
<?php $__env->startSection('title','Detail'); ?>
<?php $__env->startSection('content'); ?>

<table class="table">
    <tr>
        <th width="100px">Judul</th>
        <th width="30px">:</th>
        <th><?php echo e($pengumuman->judul_peng); ?></th>
    </tr>
    <tr>
        <th width="100px">Time</th>
        <th width="30px">:</th>
        <th><?php echo e($pengumuman->time_peng); ?></th>
    </tr>
    <tr>
        <th width="100px">Isi</th>
        <th width="30px">:</th>
        <th><?php echo e($pengumuman->isi_peng); ?></th>
    </tr>
</table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_detailPengumuman', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lataa\a\a\belajar-laravel\resources\views/v_detailpengumuman.blade.php ENDPATH**/ ?>