<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProdukController extends Controller
{
    function pro(){
        $produk = DB::table('produk')-> get();
        return view('home',['produk'=> $produk]);
    }
    
    function hapus($ProdukID){
        DB::table('produk')->where('ProdukID','=',$ProdukID)->delete();
        return redirect()->back();
    }
    function update($ProdukID){
        $produk = DB::table('produk')->where('ProdukID','=',$ProdukID)->first();       
        return view('update',['produk'=> $produk]);
        }
        
        function proses_update(Request $request,$ProdukID){

            $NamaProduk = $request->NamaProduk;
            $Harga = $request->Harga;
            $Stok = $request->Stok;
                
            DB::table('produk')->where('ProdukID',$ProdukID) -> update([
                
                'NamaProduk' => $NamaProduk,
                'Harga' => $Harga,
                'Stok' => $Stok,
            ]);
            return redirect('/home');
        }
        function proses_tambah(Request $request){
            $NamaProduk = $request->NamaProduk;
            $Harga = $request->Harga;
            $Stok = $request->Stok;
           
    
            DB::table('produk')->insert([
                'NamaProduk' => $NamaProduk,
                'Harga' => $Harga,
                'Stok' => $Stok,
            ]);
            return redirect('/home');
        }
        function penjualan(){
            $penjualan = DB::table('penjualan')-> get();
            return view('penjualan',['penjualan'=> $penjualan]);
        }
    
    }