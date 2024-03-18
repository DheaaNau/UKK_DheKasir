<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;

class RegisterController extends Controller
{
    function proses_registrasi(Request $request){
        DB::table('pegawai')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => hash::make($request->password),
            'telp' => $request->telp,
            'status'=> $request->status,
            
        ]);
        return redirect('/halaman ');
    }
}