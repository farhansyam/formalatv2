<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirCooledWaterChiller extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AirCooledWaterChillers', function (Blueprint $table) {
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
            $table->text('q29');
            $table->text('q30');
            $table->text('q31');
            $table->text('q32');
            $table->text('q33');
            $table->text('q34');
            $table->text('q35');
            $table->text('q36');
            $table->text('q37');
            $table->text('q38');
            $table->text('q39');
            $table->text('q40');
            $table->text('q41');
            $table->text('q42');
            $table->text('q43');
            $table->text('q44');
            $table->text('q45');
            $table->text('q46');
            $table->text('q47');
            $table->text('q48');
            $table->text('q49');
            $table->text('q50');
            $table->text('q51');
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
        Schema::dropIfExists('AirCooledWaterChillers');
    }
}
