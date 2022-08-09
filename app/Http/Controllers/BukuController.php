<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\M_buku;

class BukuController extends Controller
{
    

    public function index(){
        $title = 'List Buku';
        // $data = \DB::table('m_buku as b')->join('m_kategori as k','b.kategori','=','k.id')->select('b.gambar','b.judul',
        // 'k.nama','b.penulis','b.penerbit','b.tahun_terbit','b.stock','b.created_at','b.id','b.status')->get();
        
         $data = M_buku::get();

        return view('Halaman.Buku.Buku',compact('title','data'));
    }

    public function detail($id){
        $dt = M_buku::find($id);

        return view('Halaman.Buku.Detail',compact('dt'));
    }

    public function kosong(){
        $title = 'List Buku Stock Habis';
        // $data = \DB::table('m_buku as b')->join('m_kategori as k','b.kategori','=','k.id')->select('b.gambar','b.judul',
        // 'k.nama','b.penulis','b.penerbit','b.tahun_terbit','b.stock','b.created_at','b.id','b.status')->where('b.stock','<',1)->get();
        $data = M_buku::where('stock','<',1)->get();

        return view('Halaman.Buku.Buku',compact('title','data'));
    }

    public function nonaktif(){
         $title = 'List Buku Nonaktif';
        // $data = \DB::table('m_buku as b')->join('m_kategori as k','b.kategori','=','k.id')->select('b.gambar','b.judul',
        // 'k.nama','b.penulis','b.penerbit','b.tahun_terbit','b.stock','b.created_at','b.id','b.status')->where('b.status','!=',1)->get();
        $data = M_buku::where('status','<',1)->get();

        return view('Halaman.Buku.Buku',compact('title','data'));
    }

    public function add(){
        $title = 'Tambah Buku';
        $kategori = \DB::table('m_kategori')->get();

        return view('Halaman.Buku.TambahBuku', compact('title','kategori'));
    }

    public function store(Request $request){
        $judul = $request->judul;
        $stock = $request->stock;
        $kategori = $request->kategori;
        $penulis = $request->penulis;
        $penerbit = $request ->penerbit;
        $tahun_terbit = $request->tahun_terbit;
       

        $file = $request->file('gambar');

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        \DB::table('m_buku')->insert([
            'kategori'=>$kategori,
            'judul'=>$judul,
            'stock'=>$stock,
            'penulis'=>$penulis,
            'penerbit'=>$penerbit,
            'tahun_terbit'=>$tahun_terbit,
            'gambar'=>$file->getClientOriginalName(),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        return redirect('buku');

    }

    public function edit($id){
        $title = 'Edit Buku';
        $dt = \DB::table('m_buku')->where('id',$id)->first();
        $kategori = \DB::table('m_kategori')->get();

        return view('Halaman.Buku.EditBuku',compact('title','dt','kategori'));
    }

    public function update(Request $request,$id){
        $judul = $request->judul;
        $stock = $request->stock;
        $kategori = $request->kategori;
        $penulis = $request->penulis;
        $penerbit = $request ->penerbit;
        $tahun_terbit = $request->tahun_terbit;

        $file = $request->file('gambar');

        if($file){
            \DB::table('m_buku')->where('id',$id)->update([
                'kategori'=>$kategori,
                'judul'=>$judul,
                'stock'=>$stock,
                'penulis'=>$penulis,
                'penerbit'=>$penerbit,
                'tahun_terbit'=>$tahun_terbit,
                'gambar'=>$file->getClientOriginalName(),
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
            //Move Uploaded File
            $destinationPath = 'uploads';
            $file->move($destinationPath,$file->getClientOriginalName());
        }else{
            \DB::table('m_buku')->where('id',$id)->update([
                'kategori'=>$kategori,
                'judul'=>$judul,
                // 'keterangan'=>$keterangan,
                'stock'=>$stock,
                'penulis'=>$penulis,
                'penerbit'=>$penerbit,
                'tahun_terbit'=>$tahun_terbit,
                'updated_at'=>date('Y-m-d H:i:s')
            ]);
            return redirect('buku');
        }
    }
    public function delete($id){
        \DB::table('m_buku')->where('id',$id)->delete();

        return redirect('buku');
    }

    public function status($id){
        $data = \DB::table('m_buku')->where('id',$id)->first();

        $status_sekarang = $data->status;

        if($status_sekarang == 1){
            \DB::table('m_buku')->where('id',$id)->update([
                'status'=>0
            ]);
        }else{
            \DB::table('m_buku')->where('id',$id)->update([
                'status'=>1
            ]);
        }
        return redirect('buku');
    }
}