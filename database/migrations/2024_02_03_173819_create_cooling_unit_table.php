<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoolingUnitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cooling_units', function (Blueprint $table) {
            $table->id();
            $table->text('q1');
            $table->text('q2');
            $table->text('q3');
            $table->text('q4');
            $table->text('q5');
            $table->text('q6');
            $table->text('q7');
            $table->text('q8');
            $table->text('q9');
            $table->text('q10');
            $table->text('q11');
            $table->text('q12');
            $table->text('q13');
            $table->text('q14');
            $table->text('q15');
            $table->text('q16');
            $table->text('q17');
            $table->text('q18');
            $table->text('q19');
            $table->text('q20');
            $table->text('q21');
            $table->text('q22');
            $table->text('q23');
            $table->text('q24');
            $table->text('q25');
            $table->text('q26');
            $table->text('q27');
            $table->text('q28');
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
        Schema::dropIfExists('cooling_units');
    }
}
