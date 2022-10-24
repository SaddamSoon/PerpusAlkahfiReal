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
        Schema::table('crud_buku2', function (Blueprint $table) {
            $table->after('judul', function(Blueprint $table){
                $table->integer('id_lemari');
                $table->integer('stok_buku');
                $table->integer('id_kategori');
            });

        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('id_lemari');
    }
};
