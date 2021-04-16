
<?php $__env->startSection('title','Detail Beasiswa'); ?>
<?php $__env->startSection('content'); ?>

<table class="table">
    <tr>
        <th width="100px">Judul</th>
        <th width="30px">:</th>
        <th><?php echo e($beasiswa->nama_beasiswa); ?></th>
    </tr>
    <tr>
        <th width="100px">Sponsor By</th>
        <th width="30px">:</th>
        <th><?php echo e($beasiswa->pemberi_beasiswa); ?></th>
    </tr>
    
</table>
<a href="/home/daftarbeasiswa/<?php echo e($beasiswa->id_beasiswa); ?>" >Daftar</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lataa\as\ab\belajar-laravel\belajar-laravel\resources\views/v_detailBeasiswaMahasiswa.blade.php ENDPATH**/ ?>