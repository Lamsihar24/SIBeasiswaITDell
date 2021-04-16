
<?php $__env->startSection('title','Edit'); ?>
<?php $__env->startSection('content'); ?>

<form action="/home/updatepeng/<?php echo e($pengumuman->id_peng); ?>" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="content">
        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul_peng" class="form-control" value="<?php echo e($pengumuman->judul_peng); ?>">
                    <div class="tex-danger">
                        <?php $__errorArgs = ['judul_peng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label>Time</label>
                    <input type="text" name="time_peng" class="form-control <?php $__errorArgs = ['time_peng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($pengumuman->time_peng); ?>">
                    <div class="tex-danger">
                        <?php $__errorArgs = ['time_peng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <input type="text" name="isi_peng" class="form-control <?php $__errorArgs = ['isi_peng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($pengumuman->isi_peng); ?>">
                    <div class="tex-danger">
                        <?php $__errorArgs = ['isi_peng'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-sm">SUBMIT</button>
                </div>
            </div>
        </div>
    </div>

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.v_editpengumuman', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\MudahmudahanLancar\belajar-laravel\resources\views/v_editpengumuman.blade.php ENDPATH**/ ?>