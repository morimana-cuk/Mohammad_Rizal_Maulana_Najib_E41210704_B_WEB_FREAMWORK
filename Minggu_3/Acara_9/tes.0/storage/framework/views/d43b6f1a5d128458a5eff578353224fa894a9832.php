<?php
  $pretilte = 'data siswa';
  $title = 'tambah  data ';    
?>

<?php $__env->startSection('conten'); ?>

<div class="card">
    <div class="card-body">
        <form action="/siswa" method="post">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="name" placeholder="masukan nama ">
              </div>
              <div class="mb-3">
                <label class="form-label">alamat</label>
                <input type="text" class="form-control" name="addres" placeholder="masukan alamat">
              </div>
              <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" name="phone_number" placeholder="masukan no hape">
              </div>
              <div class="mb-3">
                <label class="form-label">kelas</label>
                <input type="text" class="form-control" name="kelas" placeholder="masukan no hape">
              </div>
              <div class="mb-3">
                <input type="submit" value="simpan" class="btn_btn_primary">
              </div>
        </form>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cuk/project/web/tes.0/resources/views/create.blade.php ENDPATH**/ ?>