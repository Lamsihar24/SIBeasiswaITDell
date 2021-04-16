
<?php $__env->startSection('title','Guru'); ?>
<?php $__env->startSection('content'); ?>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>Foto Guru</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        <?php $__currentLoopData = $guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($no++); ?></td>
            <td><?php echo e($data->nip); ?></td>
            <td><?php echo e($data->nama_guru); ?></td>
            <td><?php echo e($data->matpel); ?></td>
            <td><img src="<?php echo e(url('foto_guru/'.$data->foto_guru)); ?>" width="100px" alt=""></td>
            <td>
                <a href="" class="btn btn-sm btn-success">Detail</a>
                <a href="" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>

</table>

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\lataa\belajar-laravel\resources\views/v_guru.blade.php ENDPATH**/ ?>