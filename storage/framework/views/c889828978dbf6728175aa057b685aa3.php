<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
</head>

<body>
<link rel="stylesheet" href=<?php echo e(asset("bs/css/bootstrap.min.css")); ?>>
<style>
        p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        background-color: rgb(56, 182, 182);
        }
        body{
          background-color: rgb(68, 93, 121)
        }
    </style>
    <p>Update Pelanggan</p>
    <form action=<?php echo e(url("/update_pelanggan/$pelanggan->PelangganID")); ?> method="POST" enctype="multipart/form-data">
      <?php echo method_field('POST'); ?>
      <?php echo csrf_field(); ?>
 
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="NamaPelanggan"><?php echo e($pelanggan->NamaPelanggan); ?></textarea>

 
  <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="Alamat"><?php echo e($pelanggan->Alamat); ?></textarea>
 
  <label for="exampleFormControlTextarea1" class="form-label">NomorTelepon</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="NomorTelepon"><?php echo e($pelanggan->NomorTelepon); ?></textarea>
 
<div class="container">
<a href="<?php echo e(url('home')); ?>"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Update</button>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/update_pelanggan.blade.php ENDPATH**/ ?>