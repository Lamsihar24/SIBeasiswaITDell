
<?php $__env->startSection('titlebeasiswa'," $beasiswa->nama_beasiswa"); ?>
<?php $__env->startSection('detail'," $beasiswa->nama_beasiswa"); ?>
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
        
    </tr>
    
</table>
<a href="/home/daftarbeasiswa/<?php echo e($beasiswa->id_beasiswa); ?>" >Daftar</a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_detailBeasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lataa\a\belajar-laravel\resources\views/v_detailBeasiswaMahasiswa.blade.php ENDPATH**/ ?>