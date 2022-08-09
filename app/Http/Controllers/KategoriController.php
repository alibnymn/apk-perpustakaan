<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $title = 'kategori';
        $data = \DB::table('m_kategori')->get();
            return view ('Halaman.Kategori.Kategori',compact('title','data'));
    }

    public function add(){
        $title = 'Tambah Kategori';
 
        return view('halaman.kategori.tambahkategori',compact('title'));
    }
 
    public function store(Request $request){
        $nama = $request->nama;
 
        \DB::table('m_kategori')->insert([
            'nama'=>$nama,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
 
       
 
        return redirect('kategori');
    }

    public function edit($id){
        $dt = \DB::table('m_kategori')->where('id',$id)->first();
        $title = 'Edit Kategori';
 
        return view('halaman.kategori.editkategori',compact('title','dt'));
    }
 
    public function update(Request $request,$id){
        $nama = $request->nama;
 
        \DB::table('m_kategori')->where('id',$id)->update([
            'nama'=>$nama,
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
 
       
 
        return redirect('kategori');
    }

    public function delete($id){
        \DB::table('m_kategori')->where('id',$id)->delete();
 
        
 
        return redirect('kategori');
    }
 }
