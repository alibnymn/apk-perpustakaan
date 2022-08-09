<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use App\User;

class LaporanController extends Controller
{
    public function index(){
        $title = 'List Laporan';
        $data = Peminjaman::get();
        $users = User::whereNull('email_verified_at')->get();
        // dd($data);
        return view('halaman.laporan.index',compact('title','data','users'));
    }
    
    public function cetaklaporan(){
        $title = 'List Laporan Perpustakaan';
        $data = Peminjaman::get();
        // $users = User::whereNull('email_verified_at')->get();

    return view('Halaman.Laporan.CetakLaporan',compact('title','data'));
}

public function periode(Request $request){
    $users = User::whereNull('email_verified_at')->get();

    $tanggal_awal = date('Y-m-d',strtotime($request->tanggal_awal));
    $tanggal_akhir = date('Y-m-d',strtotime($request->tanggal_akhir));
    $user = $request->user;

    $title = "list laporan dari tanggal $tanggal_awal sampai tanggal $tanggal_akhir";

    if($user == 'all'){
        $data = Peminjaman::where('created_at','>=',$tanggal_awal)->where('created_at','<=',$tanggal_akhir)->get();
    }else{
        $data = Peminjaman::where('created_at','>=',$tanggal_awal)->where('created_at','<=',$tanggal_akhir)->where('user',$user)->get();
    }

   
    // dd($data);
    return view('halaman.laporan.index',compact('title','data','users'));
}
}

