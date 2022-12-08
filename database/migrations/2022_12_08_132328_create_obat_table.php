<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('Kode_Obat');
            $table->integer('Supplier_id');
            $table->string('Nama_obat');
            $table->string('Nama_satuan');
            $table->string('Nama_Jenis');
            $table->integer('Stok');
            $table->integer('Harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('obat');
    }
};
