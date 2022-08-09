<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Peminjaman;
use App\Models\M_buku;

class PengembalianController extends Controller
{
    public function index(){

        if(\Auth()->user()->level == "admin"){
            $data = Peminjaman::whereIn('status',[1,3])->get();
        }else{
            $data = Peminjaman::whereIn('status',[1,3])->where('user',\Auth::user()->id)->get();
        }
        // $data = Peminjaman::whereIn('status',[1,3])->get();

        return view('Halaman.Pengembalian.index',compact('data'));
    }

    public function pengembalian($id){
        $dt = Peminjaman::find($id);
        $id_buku = $dt->buku;

        $buku = M_buku::find($id_buku);

        $now = $buku->stock;
        $stock_pengembalian = $now + 1;

        Peminjaman::where('id',$id)->update([
            'status'=>3
        ]);

        M_buku::where('id',$id_buku)->update([
            'stock'=>$stock_pengembalian
        ]);

        return redirect('/pengembalian');
    }
    
    public function cek($id){
        $data = \DB::table('peminjaman')->where('id',$id)->first();

        $cek_sekarang = $data->cek;

        if($cek_sekarang == 1){
            \DB::table('peminjaman')->where('id',$id)->update([
                'cek'=>0
            ]);
        }else{
            \DB::table('peminjaman')->where('id',$id)->update([
                'cek'=>1
            ]);
        }
        return redirect('pengembalian');
    }
}
