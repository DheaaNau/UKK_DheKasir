<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    function home(){
        return view('home');
    }
    function halaman(){
        return view('halaman');
    }
    function tambah_produk(){
        return view('tambah_produk');
    }
    function penjualan(){
        return view('penjualan');
    }
    function tambah_pelanggan(){
        return view('tambah_pelanggan');
    }
   
}