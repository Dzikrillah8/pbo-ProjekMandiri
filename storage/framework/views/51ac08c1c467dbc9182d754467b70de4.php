
<?php $__env->startSection('title', 'Daftar Laporan'); ?>
<?php $__env->startSection('content'); ?>

      <!-- daftar  -->

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
                            <th>Status</th>
                            <th>Action</th>
                        </thead> 
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $laporan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            
                            <td><?php echo e($laporan->judul_laporan); ?></td>
                            <td><?php echo e($laporan->tanggal); ?></td>
                            <td>
                                <?php if($laporan->status == 'menunggu'): ?>
                                <span class="badge rounded-pill bg-secondary"><?php echo e($laporan->status); ?></span>
                                <?php elseif($laporan->status == 'diproses'): ?>
                                    <span class="badge rounded-pill bg-warning"><?php echo e($laporan->status); ?></span>
                                <?php elseif($laporan->status == 'telah diproses'): ?>
                                    <span class="badge rounded-pill bg-success"><?php echo e($laporan->status); ?></span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center" style="gap:3px">
                                    <a href="<?php echo e(route('detail.index', $laporan->id)); ?>" class="btn btn-info rounded-pill"><i class="bi bi-info-circle"></i></a>
                                <form action="<?php echo e(route('laporan.delete', $laporan->id)); ?>" method="post" >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="btn btn-danger rounded-pill" onclick="return confirm('apakah anda ingin menghapus data ini?')"><i class="bi bi-danger-trash"></i></button>
                                </form>
                                </div>
                                
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                
              </div>
          </div>
      </section>
      
      
      <!-- detail end -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Tugas\12\Pbo\tugas 1\pengaduan\resources\views/daftar.blade.php ENDPATH**/ ?>