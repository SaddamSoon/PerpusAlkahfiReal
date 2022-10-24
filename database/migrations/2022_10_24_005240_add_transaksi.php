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
        Schema::create('transaksi_pinjam', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->integer('id_anggota');
            $table->integer('id_buku');
            $table->date('tgl_pinjam');
            $table->date('tgl_bataspinjam');
            $table->date('tgl_kembali')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
