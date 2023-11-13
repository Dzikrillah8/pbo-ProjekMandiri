
<?php $__env->startSection('title', 'Detail Laporan'); ?>
<?php $__env->startSection('content'); ?>

<section class="detail">
    <div class="container justify-content-center" style="width: 800px;">
        <div class="row border p-3 bg-white shadow box-area">

            <div class="header-text d-flex justify-content-center">
                <p>Detail laporan</p>
            </div>
                <div class="col-md-12">
                    
                    <div class="card">
                        <div class="card-header">
                            <h6><?php echo e($data->judul_laporan); ?></h6>  
                        </div>
                        <div class="card-body">
                            <h6>Tanggal :</h6>
                            <p><?php echo e($data->tanggal); ?></p>

                            <h6>Keterangan :</h6>
                            <p><?php echo e($data->keterangan); ?></p>
                            
                            <h6>status :</h6>
                            <p>
                                <?php if($data->status == 'menunggu'): ?>
                                <span class="badge rounded-pill bg-secondary"><?php echo e($data->status); ?></span>
                                <?php elseif($data->status == 'diproses'): ?>
                                    <span class="badge rounded-pill bg-warning"><?php echo e($data->status); ?></span>
                                <?php elseif($data->status == 'telah diproses'): ?>
                                    <span class="badge rounded-pill bg-success"><?php echo e($data->status); ?></span>
                                <?php endif; ?>
                            </p>

                            <h6>photo :</h6>
                            <p><img width="150px" class="img-thumbnail" src="<?php echo e(asset('public/photo/' . $data->photo)); ?>" alt="<?php echo e($data->photo); ?>"></p>

                        </div>
                    </div>
                    
                </div>
            
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Tugas\12\Pbo\project mandiri 1\pengaduan\resources\views/detail.blade.php ENDPATH**/ ?>