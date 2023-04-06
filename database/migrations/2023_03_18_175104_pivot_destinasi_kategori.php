<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PivotDestinasiKategori extends Migration
{
    public function up()
    {
        Schema::create('pivot_destinasi_kategori', function(Blueprint $table) {
            $table->integer('id_kategori');
            $table->integer('id_destinasi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pivot_destinasi_kategori');
    }
}
