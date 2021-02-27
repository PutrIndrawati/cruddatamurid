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
      <form action="<?php echo e(route('login')); ?>" method="post">
      <?php echo csrf_field(); ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Silahkan Login</h3>
            </div>
            <div class="panel-body">
                <?php if(session('errors')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something it's wrong:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(Session::has('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(Session::get('success')); ?>

                    </div>
                <?php endif; ?>
                <?php if(Session::has('error')): ?>
                    <div class="alert alert-danger">
                        <?php echo e(Session::get('error')); ?>

                    </div>
                <?php endif; ?>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" id="email" value="" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" id="password" value=""  class="form-control">
                    </div>
                </div>
                <form action="<?php echo e(url('postlogin')); ?>" method="get">
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
      </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/cruddatamurid/resources/views/login.blade.php ENDPATH**/ ?>