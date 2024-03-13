<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormberitaacaraTable extends Migration
{
    public function up()
    {
        Schema::create('formberitaacara', function (Blueprint $table) {
            $table->id();
            $table->text('customer');
            $table->text('no_kontak');
            $table->text('alamat');
            $table->text('engineer_list');
            $table->date('tanggal_survey');
            $table->text('c1');
            $table->text('c2');
            $table->text('c3');
            $table->text('c4');
            $table->text('c5');
            $table->text('c6');
            $table->text('c7');
            $table->text('c8');
            $table->text('jenis_survey');
            $table->text('jenis_equipment');
            $table->text('brand');
            $table->text('serial');
            $table->text('name_plate');
            $table->text('tahun_pembuatan');
            $table->text('tahun_install');
            $table->text('deskripsi');
            $table->text('analisa_awal');
            $table->text('tindakan');
            $table->text('rekomendasi_teknisi_lapangan');
            $table->text('approval_kantor');
            $table->text('approval_customer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('formberitaacara');
    }
}

