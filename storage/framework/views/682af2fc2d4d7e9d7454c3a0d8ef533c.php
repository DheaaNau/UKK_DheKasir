<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
</head>
<body>
    <style>
        p{
        text-align: center;
        font-size: 40px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        background-color: rgb(56, 182, 182);;
        }
        body{
            background-color: rgb(68, 93, 121)
        }
        .qmi{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
    </style>
    <form action="tambah_pelanggan" method="POST" enctype="multipart/form-data">
        <?php echo method_field("POST"); ?>
        <?php echo csrf_field(); ?>
    
    <p>Add Customer</p>
    <div class="qmi">
 
    <label>Nama</label><br>
    <input  type="text"name="NamaPelanggan">
    <br><br>
    <label>Alamat</label><br>
    <input  type="text"name="Alamat">
    <br><br>
    <label>NoTelp</label><br>
    <input  type="text"name="NomorTelepon">
    <br><br>
</div>
<div class="container">
<a href="<?php echo e(url('home')); ?>"><button type="button" class="btn btn-secondary">Kembali </button> </a>
<button type="submit" class="btn btn-info" style="margin-left:15px;">Tambah</button>
</form>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/tambah_pelanggan.blade.php ENDPATH**/ ?>