<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo e(asset('style.css')); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('path/to/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Bootstrap CSS -->
    <link href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')); ?>" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    
    <title><?php echo $__env->yieldContent('title'); ?></title>

</head>
<body>
    
    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background-color: #4E4FEB">
        <div class="container">
          <a class="navbar-brand fs-4" href="#">Pengaduan Sekolah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
            <ul class="navbar-nav ms-end">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route('daftar.index')); ?>">Daftar Laporan</a>
              </li>
            </ul>
          </div>
          <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="<?php echo e(asset('img/yukki.jpeg')); ?>" class="rounded-circle" height="35"
                    alt="Black and White Portrait of a Man" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                <li>
                    <a class="dropdown-item disabled">Hai, <?php echo e(auth()->user()->nama); ?>!</a>
                </li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="dropdown-item" href="#">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
     
        </div>
      </nav>
  
      <!-- navbar end -->

      <!-- hero section -->

      <?php echo $__env->yieldContent('content'); ?>

      <!-- hero section end -->

      
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

</body>
</html><?php /**PATH E:\Tugas\12\Pbo\project mandiri 1\pengaduan\resources\views/index.blade.php ENDPATH**/ ?>