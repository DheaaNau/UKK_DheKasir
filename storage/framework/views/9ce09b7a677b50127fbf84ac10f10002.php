<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <title>Web Kasir</title>
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
        p2{
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        top: 8px;
        right: 16px;
       
        }
        p1{
        font-size: 30px;
        font-family: 'Times New Roman', Times, serif;
        color: #ffffff;
        }
        body{
          background-color: rgb(68, 93, 121)
        }
        .qmi{
            color: #ffffff;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        select{
          width: 200px;
          padding: 10px;
        }
        input{
          width: 200px;
          padding: 10px;

        }
        .ui{
          position: absolute;
          top:90px;
          right: 0;
          width: 600px;
          height: 100px;
          left: 350px;
        }
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse
      
        }
        .succes{
        font-style: italic;
        text-align: center;
        color: white;
        position: absolute;
        bottom: 8px;
        right: 16px;
        font-size: 30px;
      }
        
    </style>
        <p>Orders</p>

        <?php if(session("info")): ?>
    <div class="succes"><?php echo e(session("info")); ?></div>
        <?php endif; ?>

        <?php if(session("succes")): ?>
    <div class="succes"><?php echo e(session("succes")); ?></div>
        <?php endif; ?>

    <form action='<?php echo e(url("/tambah_penjualan")); ?>' method="post">
      <?php echo method_field('POST'); ?>
      <?php echo csrf_field(); ?>

    <p1>Produk</p1><br>
    <input type="hidden" name="idPenjualan" value="<?php echo e($idPenjualan); ?>"/>
        <select aria-label="Default select example" name="produk">
          
            <option selected>Product</option>
      {!--
        
        {"ProdukID":1415,"NamaProduk":"Buku gambar","Harga":10000,"Stok":1}
        
        --}
    
    <?php $__currentLoopData = $produk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <option value="<?php echo e($produk->ProdukID); ?>" required ><?php echo e($produk->NamaProduk); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><br><br>
<input type="number" name="qty" min="1" max="100" placeholder="Jumlah"/>

<br><br>

<button type="submit" class="btn btn-warning" >Add</button>

<br>
  <p1>Pelanggan</p1><br>
<select aria-label="Default select example" name="pelanggan" >
          <option selected>Pelanggan</option>

  <?php $__currentLoopData = $pelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($pelanggan->PelangganID); ?>"><?php echo e($pelanggan->NamaPelanggan); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<br>
<br>
</form>
<br>
<br>

<br>

<div class="ui">
<p2>Isi Keranjang</p2>
<table class="table table-danger">
<thead>
    <tr>
      <th >Produk</th>
      <th >Harga</th>
      <th >Jumlah</th>
      <th >Total</th>
      <th >Opsi</th>
    </tr>
    <tbody>
      <?php $total_harga = 0?>
      <?php $__currentLoopData = $detailpenjualan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailpenjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($detailpenjualan->NamaProduk); ?></td>
      <td><?php echo e($detailpenjualan->Harga); ?></td>
      <td><?php echo e($detailpenjualan->JumlahProduk); ?></td>
      <td><?php echo e($detailpenjualan->Subtotal); ?></td>
        <?php $total_harga = $total_harga + $detailpenjualan->Subtotal ?>
        <td><a href="hapus_penjualan/<?php echo e($detailpenjualan->ProdukID); ?>"<button type="button" class="btn btn-danger"><img src="delete.png" alt=""width="20" height="30"></button></a></td>
    </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </thead>
  </table>
  <p1>Total Harga : <?php echo e(number_format($total_harga,0, ',' ,  ',')); ?></p1>

  <form class="d-grid gap-2 mt-3"action='<?php echo e(url("/checkout/")); ?>' method="POST">
  <?php echo method_field('POST'); ?>
      <?php echo csrf_field(); ?>
        <input type="hidden" name="idPenjualan" value="<?php echo e($idPenjualan); ?>">
        <input type="hidden" name="totalHarga" value="<?php echo e($total_harga); ?>">
        <input type="submit" name="checkout" value="checkout" class="btn btn-primary">
        
</form>
 
  </div>
  <a href="<?php echo e(url('penjualan')); ?>"><button type="button" class="btn btn-secondary">Kembali</button</a>
</body>
</html> <?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/tambah_penjualan.blade.php ENDPATH**/ ?>