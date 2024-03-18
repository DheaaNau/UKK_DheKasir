<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PelangganController extends Controller
{
        function index(Request $request){
            return view("pelanggan");
        }
        function po(){
            $pelanggan = DB::table('pelanggan')-> get();

    
            return view('pelanggan',['pelanggan'=> $pelanggan]);
        }
        function hapus($PelangganID){
            DB::table('pelanggan')->where('PelangganID','=',$PelangganID)->delete();
    
            return redirect()->back();
        }
        function update($PelangganID){
            $pelanggan = DB::table('pelanggan')->where('PelangganID','=',$PelangganID)->first();
                
            return view('update_pelanggan',['pelanggan'=> $pelanggan]);
        }
        function proses_update(Request $request,$PelangganID){
            $NamaPelanggan = $request->NamaPelanggan;
            $Alamat = $request->Alamat;
            $NomorTelepon = $request->NomorTelepon;
                
            DB::table('pelanggan')->where('PelangganID',$PelangganID) -> update([
                
                'NamaPelanggan' => $NamaPelanggan,
                'Alamat' => $Alamat,
                'NomorTelepon' => $NomorTelepon,
            ]);
            return redirect('/pelanggan');
        }
    
    function proses_tambah_pelanggan(Request $request){
        $NamaPelanggan = $request->NamaPelanggan;
        $Alamat = $request->Alamat;
        $NomorTelepon = $request->NomorTelepon;
       

        DB::table('pelanggan')->insert([
            'NamaPelanggan' => $NamaPelanggan,
            'Alamat' => $Alamat,
            'NomorTelepon' => $NomorTelepon,
        ]);
        return redirect('/pelanggan');
    }
}