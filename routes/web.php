<?php
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login', [LoginController::class,'login'])->name("login");
Route::get('/login', [LoginController::class,'index']);

Route::group(['middleware' => ['Admin']],function(){
Route::get('/register', function () {
    return view('register');
});

Route::post('register', [RegisterController::class,'proses_registrasi']);
});

Route::middleware(['auth'])->group(function () {
    
Route::get('/logout', [LoginController::class,'logout']);

Route::get('/home', [KasirController::class, 'home']);
Route::get('/home', [ProdukController::class, 'pro']);

Route::get('/halaman', [KasirController::class, 'halaman']);

Route::get('/tambah_pelanggan', [KasirController::class, 'tambah_pelanggan']);
Route::get('/tambah_produk', [KasirController::class, 'tambah_produk']);

Route::get('/penjualan', [KasirController::class, 'penjualan']);

Route::get('/detail_penjualan/{id}', [PenjualanController::class,'detail_penjualan']);

Route::get('/hapus_produk/{ProdukID}', [ProdukController::class,'hapus']);

Route::get('/hapus_penjualan/{ProdukID}', [PenjualanController::class,'hapus_penjualan']);

Route::post('/checkout', [PenjualanController::class,'checkout']);

Route::post('/tambah_penjualan', [PenjualanController::class,'store']);
Route::get('/tambah_penjualan', [PenjualanController::class,'index']);
Route::get('/penjualan', [ProdukController::class, 'penjualan']);

Route::post('/tambah_produk', [ProdukController::class,'proses_tambah']);

Route::get ('/update_produk/{ProdukID}', [ProdukController::class,'update']);
Route::post('/update_produk/{ProdukID}', [ProdukController::class,'proses_update']);

Route::get('/pelanggan', [PelangganController::class,'index']);
Route::get('/pelanggan', [PelangganController::class, 'po']);
Route::post('/tambah_pelanggan', [PelangganController::class, 'proses_tambah_pelanggan']);

Route::get('/hapus_pelanggan/{PelangganID}', [PelangganController::class,'hapus']);
Route::get('/update_pelanggan/{PelangganID}', [PelangganController::class,'update']);
Route::post('/update_pelanggan/{PelangganID}', [PelangganController::class,'proses_update']);

});