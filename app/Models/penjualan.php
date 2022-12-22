<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class penjualan extends Model
{
    use HasFactory;
    protected $table = "penjualan";

    public function obat(){
        return $this->belongsTo(Obat::class,'id_nama');
    }
}
