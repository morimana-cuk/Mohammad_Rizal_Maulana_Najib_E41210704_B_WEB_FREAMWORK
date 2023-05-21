<?php
  $pretilte = 'data siswa';
  $title = 'edit data siswa';    
?>


<?php $__env->startSection('conten'); ?>

<div class="card">
    <div class="card-body">
        <form action="/siswa/<?php echo e($inid->id); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="name" placeholder="masukan nama"
                value="<?php echo e($inid->name); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">alamat</label>
                <input type="text" class="form-control" name="addres" placeholder="masukan alamat"
                value="<?php echo e($inid->addres); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" name="phone_number" placeholder="masukan no hape"
                value="<?php echo e($inid->phone_number); ?>">
              </div>
              <div class="mb-3">
                <label class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="masukan no hape"
                value="<?php echo e($inid->class); ?>">
              </div>
              <div class="mb-3">
                <input type="submit" value="simpan" class="btn_btn_primary">
              </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cuk/project/web/tes.0/resources/views/edit.blade.php ENDPATH**/ ?>