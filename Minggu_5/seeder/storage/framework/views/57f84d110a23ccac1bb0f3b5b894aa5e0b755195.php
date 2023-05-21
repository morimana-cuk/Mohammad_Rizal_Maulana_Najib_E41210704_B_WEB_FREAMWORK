<?php
  $pretilte = 'data siswa';
  $title = 'semua data ';    
?>

<?php $__env->startPush('page-action'); ?>
    <a href="/siswa/buat" class="btn btn-primary">tambah data </a>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('conten'); ?>
<h1>ini adalah halama student</h1>

<div class="card">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            
            <th>Name</th>
            <th>address</th>
            <th>phone number </th>
            <th>class</th>
            <th>action</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $iniV; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    
                    <td><?php echo e($item ->name); ?></td>
                    <td><?php echo e($item ->addres); ?></td>
                    <td><?php echo e($item ->phone_number); ?></td>
                    <td><?php echo e($item ->class); ?></td>
                    <td>
                      <a href="/siswa/<?php echo e($item->id); ?>/edit">edit</a>
                     
                      <form action="<?php echo e(route('hancur', $item->id)); ?>" method="POST">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('delete'); ?>
                      <input type="submit" value="hapus" class="btn btn-danger btn-sm">
                      </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
      </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cuk/project/web/tes.0/resources/views/students.blade.php ENDPATH**/ ?>