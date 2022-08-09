<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_buku extends Model
{
    protected $table = 'm_buku';

    public function kategori_r(){
        return $this->belongsTo('App\Models\M_kategori','kategori');
    }
}
