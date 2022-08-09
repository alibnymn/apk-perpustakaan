<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AnggotaController extends Controller
{
    public function index(){
        $data = User::where('remember_token',null)->get();
        return view ('Halaman.Manage.profilanggota',compact('data'));
    }
   
    public function cetakanggota($id){
       $dt = User::find($id);
      
        return view('Halaman.Manage.CetakAnggota',compact('dt'));
    }
    
     public function anggota(){
        $data = User::where('email_verified_at',null)->get();
        return view ('Halaman.Manage.manageanggota',compact('data'));
    }

    public function add(){
        return view('Halaman.Manage.TambahAnggota');
    }

    public function store(Request $request){
        $form = [];

        $form['name'] = $request->name;
        $form['email'] = $request->email;
        $form['kelas'] = $request->kelas;
        $form['jurusan'] = $request->jurusan;
        $form['password'] = bcrypt('123');
        $form['created_at'] = date('Y-m-d H:i:s');
        $form['updated_at'] = date('Y-m-d H:i:s');

        User::insert($form);

        return redirect('profilanggota');
    }

    public function edit($id){
        $dt = User::find($id);

        return view('Halaman.Manage.EditAnggota',compact('dt'));
    }

    public function update(Request $request,$id){
        $form = [];

        $form['name'] = $request->name;
        $form['email'] = $request->email;
        // $form['password'] = bcrypt('123');
        $form['kelas'] = $request->kelas;
        $form['jurusan'] = $request->jurusan;
        // $form['created_at'] = date('Y-m-d H:i:s');
        $form['updated_at'] = date('Y-m-d H:i:s');
        

        User::where('id',$id)->update($form);

        return redirect('profilanggota');
    }

    public function delete($id){
        User::where('id',$id)->delete();

        return redirect('profilanggota');
    } 
}
