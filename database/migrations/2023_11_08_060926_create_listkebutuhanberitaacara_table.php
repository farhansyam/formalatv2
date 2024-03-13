<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListKebutuhanBeritaAcaraTable extends Migration
{
    public function up()
    {
        Schema::create('listkebutuhanberitaacara', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_beritaacara'); // Kolom untuk menghubungkan ke tabel "formberitaacara"
            $table->foreign('id_beritaacara')->references('id')->on('formberitaacara')->onDelete('cascade');
            $table->text('deskripsi');
            $table->text('modelpart');
            $table->text('qty');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('listkebutuhanberitaacara');
    }
}
