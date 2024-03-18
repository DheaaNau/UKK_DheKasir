<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
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
        .qmi{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
    </style>
      <form action="tambah_produk" method="POST" enctype="multipart/form-data">
        <?php echo method_field("POST"); ?>
        <?php echo csrf_field(); ?>
    
    <p>Tambah Produk</p>
    <div class="qmi">
 
    <label>Nama Produk</label><br>
    <input name="NamaProduk" type="text"id="NamaProduk">
    <br><br>
    <label>Harga</label><br>
    <input name="Harga" type="number"id="Harga">
    <br><br>
    <label>Stok</label><br>
    <input name="Stok" type="number"id="Stok">
    <br><br>
</div>
<div class="container">
<a href="<?php echo e(url('home')); ?>"><button type="button" class="btn btn-secondary">Kembali</button</a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Tambah</button>
</form>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/tambah_produk.blade.php ENDPATH**/ ?>