<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = "table_pembelian";

    public function obat(){
        return $this->belongsTo(Obat::class,'id_nama');
    }
    public function supplai(){
        return $this->belongsTo(Supplier::class,'id_supplier');
    }
}
