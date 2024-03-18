<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PENJUALAN</title>
</head>
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
<nav class="navbar" style=" background-color: rgb(56, 182, 182);;">
<nav class="navbar navbar-expand-lg ">
  <img src=<?php echo e(asset('logoo.jpg')); ?> alt=""width="70" height="60">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('halaman')); ?>">Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('home')); ?>">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('pelanggan')); ?>">Customer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo e(url('tambah_penjualan')); ?>">Shoping</a>
      </li>
    </ul>
  </div>
</nav>
</div>

</nav>
<br>

<p>Data Penjualan</p>
<div class="container">
<table class="table table-danger">
<thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Harga</th>
      <th scope="col">Id Pelanggan</th>
      <th scope="col">Opsi</th>
    </tr>
    
  </thead>
  <tbody>
  <?php $__currentLoopData = $penjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($penjualan->PenjualanID); ?></td>
      <td><?php echo e($penjualan->TanggalPenjualan); ?></td>
      <td><?php echo e($penjualan->TotalHarga); ?></td>
      <td><?php echo e($penjualan->PelangganID); ?></td>

      
      <td>
        <a href="detail_penjualan/<?php echo e($penjualan->PenjualanID); ?>"><button type="button" class="btn btn-primary"> 
          <img src=<?php echo e(asset('detail.png')); ?> alt=""width="40" height="30"></button></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/penjualan.blade.php ENDPATH**/ ?>