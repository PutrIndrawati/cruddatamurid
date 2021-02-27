<?php $__env->startSection('content'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?php echo e(url('home')); ?>">Home</a>
        <a class="nav-link" href="<?php echo e(url('about')); ?>">About</a>
        <a class="nav-link" href="<?php echo e(url('create')); ?>">Input Data</a>
        <a class="nav-link" href="<?php echo e(url('/')); ?>">View Data</a>
        <a class="nav-link" href="<?php echo e(url('login')); ?>">Login</a>
        <a class="nav-link" href="<?php echo e(url('logout')); ?>">Logout</a>
      </div>
    </div>
  </div>
  </nav>
            <div class="panel-body">
                <form action="<?php echo e(url('create')); ?>" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Tambah Baru" class="btn btn-success btn-sm">
                    </div>
                </form>
                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Alamat</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->nim); ?></td>
                            <td><?php echo e($d->nama_lengkap); ?></td>
                            <td><?php echo e($d->alamat); ?></td>
                            <td><?php echo e($d->jurusan); ?></td>
                            <td>
                                <a href="<?php echo e(url('read',array($d->id))); ?>" class="btn btn-info btn-sm">Lihat</a>
                                <a href="<?php echo e(url('edit',array($d->id))); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo e(url('delete',array($d->id))); ?>" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/cruddatamurid/resources/views/index.blade.php ENDPATH**/ ?>