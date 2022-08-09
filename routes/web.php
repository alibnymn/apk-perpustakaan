<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

 Route::group(['middleware' => ['auth', 'ceklevel:admin']], function (){
     
//Beranda
    route::get('/beranda', 'BerandaController@index');
 
//kategori
    route::get('/kategori', 'BerandaController@kategori');
    route::get('/kategori', 'KategoriController@index')->name('Kategori'); 
    route::get('/tambahkategori','Kategoricontroller@add');
    route::post('tambahkategori','Kategoricontroller@store');
    route::get('/editkategori/{id}','Kategoricontroller@edit');
    route::put('/kategori/{id}','Kategoricontroller@update');
    route::get('/kategori/{id}','Kategoricontroller@delete');

//buku
    route::get('/buku', 'BerandaController@buku');
    route::get('/buku','BukuController@index')->name('buku');
    route::get('detail/{id}','BukuController@detail');
    route::get('buku/kosong','BukuController@kosong');
    route::get('buku/nonaktif','BukuController@nonaktif');
    route::get('/tambahbuku','BukuController@add');
    route::post('/buku','Bukucontroller@store');
    route::get('/editbuku/{id}','BukuController@edit');
    route::put('/buku/{id}','BukuController@update'); 
    route::get('/buku/{id}','BukuController@delete');  
    route::get('buku/status/{id}','BukuController@status');

//peminjaman
    route::get('/peminjaman', 'BerandaController@peminjaman');
    route::get('/pinjam','PeminjamanController@index')->name('pinjam');
    route::get('pinjam/{id}', 'PeminjamanController@store'); 
    route::get('/pinjam/setujui/{id}','PeminjamanController@setujui');
    route::get('/pinjam/tolak/{id}','PeminjamanController@tolak');

//pengembalian
    route::get('/pengembalian', 'BerandaController@pengembalian');
    route::get('pengembalian','PengembalianController@index')->name('pengembalian');
    route::get('/pengembalian/{id}','PengembalianController@pengembalian');
    route::get('pengembalian/cek/{id}','pengembalianController@cek');

// Manage Anggota& Profil Anggota
    route::get('/profil', 'BerandaController@profil')->name('profil');
    route::get('/anggota', 'BerandaController@anggota')->name('dataanggota');
    route::get('profilanggota','AnggotaController@index')->name('profilanggota');
    route::get('cetakanggota/{id}','AnggotaController@cetakanggota');
    route::get('manageanggota','AnggotaController@anggota')->name('dataanggota');
    route::get('tambahanggota','AnggotaController@add');
    route::post('profilanggota','AnggotaController@store');
    route::get('editanggota/{id}','AnggotaController@edit');
    route::put('profilanggota/{id}','AnggotaController@update');
    route::get('profilanggota/{id}','AnggotaController@delete');

//Laporan
    route::get('/laporan', 'BerandaController@laporan');
    route::get('laporan','LaporanController@index');
    route::get('cetaklaporan','LaporanController@cetaklaporan');
    route::get('lapora/periode','LaporanController@periode'); 
}); 

Route::group(['middleware' => ['auth', 'ceklevel:admin,user']], function (){
   
//Beranda
    route::get('/beranda', 'BerandaController@index'); 
    route::get('/listbuku', 'BerandaController@listbuku');
 
//kategori
    route::get('/kategori', 'BerandaController@kategori');
    route::get('/kategori', 'KategoriController@index')->name('Kategori'); 
//buku
    route::get('/buku', 'BerandaController@buku');
    route::get('/buku','BukuController@index')->name('buku');
    route::get('buku/kosong','BukuController@kosong');
    route::get('buku/nonaktif','BukuController@nonaktif');

//peminjaman
    route::get('/peminjaman', 'BerandaController@peminjaman');
    route::get('/pinjam','PeminjamanController@index');
    route::get('pinjam/{id}', 'PeminjamanController@store'); 
    route::get('/pinjam/setujui/{id}','PeminjamanController@setujui');
    route::get('/pinjam/tolak/{id}','PeminjamanController@tolak');

//pengembalian
    route::get('/pengembalian', 'BerandaController@pengembalian');
    route::get('pengembalian','PengembalianController@index');
    route::get('/pengembalian/{id}','PengembalianController@pengembalian');

}); 
    