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
    <p>Update Produk</p>
    <form action=<?php echo e(url("/update_produk/$produk->ProdukID")); ?> method="POST" enctype="multipart/form-data">
      <?php echo method_field('POST'); ?>
      <?php echo csrf_field(); ?>
 
    <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Nama Produk</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="NamaProduk"><?php echo e($produk->NamaProduk); ?></textarea>

 
  <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="Harga"><?php echo e($produk->Harga); ?></textarea>
 
  <label for="exampleFormControlTextarea1" class="form-label">Stok</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"name="Stok"><?php echo e($produk->Stok); ?></textarea>
 
<div class="container">
<a href="<?php echo e(url('home')); ?>"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Update</button>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/update.blade.php ENDPATH**/ ?>