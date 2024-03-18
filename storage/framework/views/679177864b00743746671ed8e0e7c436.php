<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Kasir</title>
</head>
<body>
<link rel="stylesheet" href="bs/css/bootstrap.min.css">
<body>
<style>
    p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
            
    }
    body{
        background-color: rgb(68, 93, 121)
    }
    .btn{
      text-align: right;
    }
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse
      
    }
   
</style>
<nav class="navbar" style="background-color: rgb(56, 182, 182);">
<nav class="navbar navbar-expand-lg ">
  <img src=<?php echo e(asset('logoo.jpg')); ?> alt=""width="70" height="60">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('home')); ?>">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('pelanggan')); ?>">Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('penjualan')); ?>">Penjualan</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div class="btn">
    <a type="button" href="<?php echo e(url('/logout')); ?>" class="btn btn-danger">Logout</a>
    <a type="button" href="<?php echo e(url('/register')); ?>" class="btn btn-warning">Register</a>
    </div>
</nav>
<br>
<p>Selamat Datang <?php echo e(auth()->user()->username); ?></p>

<div style="float:right;"> <img src=<?php echo e(asset('dhea.jpg')); ?> alt=""width="400" height="450">

</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/halaman.blade.php ENDPATH**/ ?>