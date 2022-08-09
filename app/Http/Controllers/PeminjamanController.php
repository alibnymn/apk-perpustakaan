<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Carbon\Carbon;

class PeminjamanController extends Controller
{
    public function index(){
        if(\Auth()->user()->level == "admin") {
            $data = Peminjaman::get();
        }else{
            $data = Peminjaman::where('user',\Auth::user()->id)->get();
        }
        // $data = Peminjaman::get();

        return view('Halaman.Peminjaman.index',compact('data'));
    }
    public function store($id){
        $cek = \DB::table('m_buku')->where('id',$id)->where('stock','>',0)->where('status',1)->count();

        if($cek > 0){
            \DB::table('peminjaman')->insert([
                'buku'=>$id,
                'user'=>\Auth::user()->id,
                'created_at'=> Carbon::now(),
                'updated_at'=>  Carbon::now(),
                'tgl_kembali'=>  Carbon::now()->addDay(3)
                
            ]);
        $buku = \DB::table('m_buku')->where('id',$id)->first();
        $qty_now = $buku->stock;
        $qty_new = $qty_now - 1;
        \DB::table('m_buku')->where('id',$id)->update([
            'stock'=>$qty_new
        ]);

            return redirect('/buku');
        }else{
            return redirect('/buku');
        }
    }
    public function setujui($id){
        Peminjaman::where('id',$id)->update(['status'=>1]);

        return redirect('/pinjam');
    }

    public function tolak($id){
        Peminjaman::where('id',$id)->update(['status'=>2]);

        return redirect('/pinjam');
    }
}
