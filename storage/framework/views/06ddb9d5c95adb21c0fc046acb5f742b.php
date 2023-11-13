
<?php $__env->startSection('title', 'Admin'); ?>
<?php $__env->startSection('content'); ?>

<section class="daftar">
    <div class="container d-flex justify-content-center" style="width: 800px;">
        <div class="row border p-3 bg-white shadow box-area">
            
            <div class="header-text d-flex justify-content-center">
                <p>Daftar Laporan</p>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <th>Judul Laporan</th>
                        <th>Tanggal</th>
                        <th>Action</th>
                    </thead> 
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        
                        <td><?php echo e($item->judul_laporan); ?></td>
                        <td><?php echo e($item->tanggal); ?></td>
                        <td>
                            <div class="d-flex justify-content-center" style="gap:3px">
                                <a href="<?php echo e(route('admin.edit', $item->id)); ?>" class="btn btn-info btn-circle"><i class="fa-solid fa-pencil-info"></i></a>
                            </div>
                            
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            
          </div>
      </div>
  </section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Tugas\12\Pbo\project mandiri 1\pengaduan\resources\views/admin.blade.php ENDPATH**/ ?>