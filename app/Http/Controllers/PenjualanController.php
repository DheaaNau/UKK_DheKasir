<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PenjualanController extends Controller
{
   function index(){
    $produk = DB::table("produk")->get();
    $pelanggan = DB::table("pelanggan")->get();
    $penjualan = DB::table("penjualan")->latest()->first();

    $idPenjualan = "";
    if($penjualan->status=="selesai")
      {$idPenjualan = $penjualan->PenjualanID + 1;
   }
   else{
      $idPenjualan = $penjualan->PenjualanID;
   }
   

    
   // return $idPenjualan;
   $detailpenjualan = DB::table("detailpenjualan")->where("PenjualanID",$idPenjualan)
   ->join("produk","detailpenjualan.ProdukID","=",'produk.ProdukID')
   ->get();
   
   return view("tambah_penjualan",['detailpenjualan'=> $detailpenjualan,'idPenjualan' => $idPenjualan,'produk' => $produk,'pelanggan'=> $pelanggan]);
}
function store(Request $request){

  $produk = DB::table('produk')->where('ProdukID',$request->produk)->first();
 
  $DataPenjualan = DB::table('penjualan')->where('PenjualanID',$request->idPenjualan)->first();
  if(!$DataPenjualan){
  $penjualan = DB::table("penjualan")->insert([
     'PenjualanID' => $request->idPenjualan,
     'TanggalPenjualan' => date("Y-m-d"),
     'TotalHarga' => 0,
     'PelangganID' => $request->pelanggan,
     'status' => "pending"
  ]);
}

  if($produk->Stok - $request->qty < 0){
  return redirect()->back()->with("info","Stok Tidak Mencukupi");
}else{
  $detailpenjualan = DB::table("detailpenjualan")->insert([
     'PenjualanID'=> $request->idPenjualan,
     'ProdukID'=>$request->produk,
     'JumlahProduk'=>$request->qty,
     'Subtotal'=> $request->qty * $produk->Harga

  ]);
  DB::table("produk")->where("ProdukID",$request->produk )
  ->update(['Stok'=>$produk->Stok - $request->qty ]);  
  
  return redirect()->back();

}
}
function checkout(Request $request){
  $penjualan = DB::table("penjualan")->where('PenjualanID', $request->idPenjualan)->first();
  $updateData = DB::table('penjualan')->where('PenjualanID',$request->idPenjualan)->update([
     'status'=> "selesai",
     'TotalHarga'=> $request->totalHarga
  ]);
  if(!$penjualan){
     return redirect()->back()->with("error","isi keranjang dulu");
  }
  if($updateData){
     return redirect()->back()->with("succes","Penjualan Telah Berhasil ");
  }
    
  }
  
  function detail_penjualan($id){
     
     $penjualan = DB::table('penjualan')->where('PenjualanID',$id)
     ->join('pelanggan', 'penjualan.PelangganID', '=','pelanggan.PelangganID')
     ->get();
     $detailPenjualan = DB::table('detailpenjualan')->where('PenjualanID',$id)
     ->join('produk','detailpenjualan.ProdukID','=','produk.ProdukID')
     ->get();


     return view("detail",['detailpenjualan'=> $detailPenjualan,'penjualan' => $penjualan]);
  }
  function hapus_penjualan(request $request, $id){
     $datapenjualan = DB::table('detailpenjualan')->where('ProdukID', '=',$id)->first();
     $produk = DB::table('produk')->where('ProdukID',$id)->first();

     DB::table("produk")->where('ProdukID', $id)->update(['stok'=> $produk->Stok + $datapenjualan->JumlahProduk]);
     DB::table("detailpenjualan")->where('ProdukID','=', $id)->delete ();
      return redirect()->back();
  }
}


