<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->text('jenis');
            $table->text('brand');
            $table->text('serial_number');
            $table->text('nameplate');
            $table->text('tahun_pembuatan');
            $table->text('tahun_installasi');
            $table->text('kapasitas');
            $table->text('customer');
            $table->text('area');
            $table->text('status')->nullable();
            $table->text('form1_status')->nullable();
            $table->text('form2_status')->nullable();
            $table->text('form3_status')->nullable();
            $table->text('user_id')->nullable();
            $table->text('foto');
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
        Schema::dropIfExists('equipments');
    }
}
