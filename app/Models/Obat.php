<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Supplier;

class Obat extends Model
{
    use HasFactory;
    protected $table = "obat";

    public function suplai(){
        return $this->belongsTo(Supplier::class,'Supplier_id');
    }
}
