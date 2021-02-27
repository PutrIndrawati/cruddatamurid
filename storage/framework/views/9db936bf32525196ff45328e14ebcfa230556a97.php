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
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Tambah Data Murid</h3>
            </div>
            <div class="panel-body">
                <form action="<?php echo e(url('insert')); ?>" method="post">
                    <div class="form-group row">
                        <label for="nim" class="col-sm-2 col-form-label">NIS</label>
                        <div class="col-sm-10">
                            <input type="text" name="nim" id="nim" class="form-control" required="require">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control">
                            <div class="small text-danger">masukkan min 5 karakter</div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <label for="nama_lengkap" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                    </div>                    
                    <div class="form-group row">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                        <div class="col-sm-10">
                            <select name="jurusan" class="custom_select form-control" id="jurusan">
                                <option value="TKJ" selected>TKJ</option>
                                <option value="RPL" selected>RPL</option>
                                <option value="Multimedia" selected>Multimedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success"><?php echo csrf_field(); ?>                       
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/cruddatamurid/resources/views/create.blade.php ENDPATH**/ ?>