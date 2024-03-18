<!DOCTYPE HTML>
<html>
    <head>
        <title>Daftar</title>
        <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    </head>
    <style>
  body{
    background-color: rgb(68, 93, 121)
  }
    .daftar{
      text-align: center; 
    border: 3px solid rgb(255, 255, 255);
    background-color: rgb(162, 227, 253);
    width: 300px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
    border-radius: 10px;
      }
      h2{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      }
      select{
        width: 190px;
      }

</style>
<body>
  <div class="daftar">
    <h2>Registrasi</h2>
      <form method="POST" action="<?php echo e(url('register')); ?>"> 
        <?php echo method_field('POST'); ?>
        <?php echo csrf_field(); ?>
          <div class="Daftar">
        
          <label>Nama</label>
          <br>
          <input name="nama" type="text" required >
          <br>
          <label>Username</label>
          <br>
          <input name="username" type="text" required >
           <br>
          <label>Password</label>
          <br>
          <input name="password" type="password" required >
          <br>
          <label>Telp</label>
          <br>
          <input name="telp" type="text" required >
          <br>
          <label>Status</label>
          <br>
            <select name="status">
              <option value="petugas">Petugas</option>
              <option value="admin">Admin</option>

            </select>
            <br>
            <br>
          <button type="submit" class="btn btn-outline-dark">Registrasi</button>
          <a href="<?php echo e(url('halaman')); ?>"><button type="button" class="btn btn-outline-dark">Kembali</button></a>
</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\UKK-Dhea\resources\views/register.blade.php ENDPATH**/ ?>