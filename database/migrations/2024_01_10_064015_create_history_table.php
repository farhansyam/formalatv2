<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->id();
            $table->text('type');
            $table->unsignedBigInteger('id_act'); // Mengubah tipe data menjadi unsignedBigInteger
            $table->unsignedBigInteger('id_equipment'); // Mengubah tipe data menjadi unsignedBigInteger
            $table->unsignedBigInteger('id_user'); // Mengubah tipe data menjadi unsignedBigInteger
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
        Schema::dropIfExists('history');
    }
}
