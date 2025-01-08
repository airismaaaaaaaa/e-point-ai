<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Admin</title>
</head>
<body>
  <a class="nav-link" href="<?php echo e(route('siswa.index')); ?>">Data Siswa</a>
<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a>
<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST">
<?php echo csrf_field(); ?> 
</form> 
<h1>Dashboard Admin</h1>
<?php if($message = Session::get('success')): ?>
<p><?php echo e($message); ?></p>
<?php else: ?> 
<p>You are logged in!</p>
<?php endif; ?>

</body>

<footer> 

</footer><?php /**PATH C:\laragon\www\ai\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>