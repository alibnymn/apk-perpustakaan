<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BerandaController;
use Illuminate\Http\Request;
use App\Models\M_buku;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $var_nama = "hi ali";
        return view ('HalamanDepan.beranda', compact('var_nama'));
    }

    public function buku()
    {
        return view('Halaman.buku.buku');
    }

    public function kategori()
    {
        return view('Halaman.Kategori.Kategori');
    }

    public function peminjaman()
    {
        return view('Halaman.peminjaman.index ');
    }

    public function pengembalian()
    {
        return view('Halaman.pengembalian.index');
    }

    public function profil()
    {
        return view('Halaman.anggota.profil');
    }

    public function anggota()
    {
        return view('Halaman.anggota.anggota');
    }

   
    public function laporan()
    {
        return view('Halaman.laporan.index');
    }












    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}