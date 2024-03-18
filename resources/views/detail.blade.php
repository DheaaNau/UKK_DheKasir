<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAIL</title>

</head>
<link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
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
</style>
<nav class="navbar" style="background-color: rgb(56, 182, 182);">
<nav class="navbar navbar-expand-lg ">
  <img src={{asset('logoo.jpg')}} alt=""width="70" height="60">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="{{url('halaman')}}">Home</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{url('home')}}">Produk</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('penjualan')}}">Penjualan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('pelanggan')}}">Pelanggan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('penjualan')}}">Penjualan</a>
      </li>
    </ul>
  </div>
</nav>
</div>

<div class="btn">
    <a type="button" href="{{url('/logout')}}" class="btn btn-danger">Logout</a>
    </div>
</nav>

<br>
<p>Detail</p>

<div class="container">
<table class="table table-danger">
<thead>
    <tr>
      <th scope="col">Tanggal Penjualan</th>
      <th scope="col">Total</th>
      <th scope="col">Nama Pelanggan</th>

    </tr>
    
  </thead>
  <tbody>
  @foreach ($penjualan as $penjualan)
    <tr>
      <td>{{$penjualan->TanggalPenjualan}}</td>
      <td>{{$penjualan->TotalHarga}}</td>
      <td>{{$penjualan->NamaPelanggan}}</td>
       
    </tr>
    </tbody>
    @endforeach
  </thead>
  </table>
</table>
</div>

<div class="container">
<table class="table table-danger">
<thead>
    <tr>
      <th scope="col">Nama Produk</th>
      <th scope="col">Harga</th>
      <th scope="col">Qty</th>
      <th scope="col">Subtotal</th>
    </tr>    
  </thead>

  <tbody>
  @foreach ($detailpenjualan as $detailpenjualan)
    <tr>
      <td>{{$detailpenjualan->NamaProduk}}</td>
      <td>{{$detailpenjualan->Harga}}</td>
      <td>{{$detailpenjualan->JumlahProduk}}</td>
      <td>{{$detailpenjualan->Subtotal}}</td>      
    </tr>
    </tbody>
    @endforeach
  </thead>
  </table>
</table>
</div>
</body>
</html>