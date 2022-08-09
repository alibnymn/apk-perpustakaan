<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'peminjaman';

    public function buku_r(){
        return $this->belongsTo('App\Models\M_buku','buku');
    }
    
    public function user_r(){
        return $this->belongsTo('App\User','user');
    }

    public function status_r(){
        return $this->belongsTo('App\Models\M_status','status','kode')->withDefault(['nama'=>'Menunggu Verifikasi']);
    }
}
